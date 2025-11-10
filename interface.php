 <?php
  interface IpaymentProcessor
  {
    public function processPayment(float $amount): bool;
    public function processRefund(float $amount): bool;
  }

  abstract class OnlinePaymentProccessor implements IpaymentProcessor
  {
    public function __construct(protected string $apiKey) {}
    abstract protected function validateApiKey(): bool;
    abstract protected function executePayment($amount): bool;
    abstract protected function executeRefund($amount): bool;

    public function processPayment(float $amount): bool
    {
      if (!$this->validateApiKey()) {
        throw new Exception("Invalid Api Key");
      }
      return $this->executePayment($amount);
    }
    public function processRefund(float $amount): bool
    {
      if (!$this->validateApiKey()) {
        throw new Exception("Invalid Api Key");
      }
      return $this->executeRefund($amount);
    }
  }
  class StripeProccessor extends OnlinePaymentProccessor
  {

    protected function validateApiKey(): bool
    {
      return strpos($this->apiKey, 'sk_') === 0;
    }
    protected function executePayment($amount): bool
    {
      echo "Processing Stripe Payment Of $amount\n";
      return true;
    }
    protected function executeRefund($amount): bool
    {
      echo "Processing Stripe Refund Of $amount\n";

      return true;
    }
  }
  class PayPalProccessor extends OnlinePaymentProccessor
  {
    protected function validateApiKey(): bool
    {
      return strlen($this->apiKey) === 32;
    }
    protected function executePayment($amount): bool
    {
      echo "Processing Paypal Payment Of $amount\n";
      return true;
    }
    protected function executeRefund($amount): bool
    {
      echo "Processing Paypal Refund Of $amount\n";

      return true;
    }
  }
  class CashPaymentProcessor implements IpaymentProcessor
  {
    public function processPayment(float $amount): bool
    {
      echo "Processing CashPayment of $amount\n";
      return true;
    }
    public function processRefund(float $amount): bool
    {
      echo "Processing Refund CashPayment of $amount\n";
      return true;
    }
  }

  class OrderProccessor
  {
    //composotion over inheritance
    public function __construct(private IpaymentProcessor $paymentProcessor) {}
    public function processOrder(float $amount): void
    {
      if ($this->paymentProcessor->processPayment($amount)) {
        echo "Order Processed Successfully\n";
      } else {
        echo "Order Processing Failed\n";
      }
    }
    public function refundOrder($amount): void
    {
      if ($this->paymentProcessor->processRefund($amount)) {
        echo "Order Refunded Successfully\n";
      } else {
        echo "Order refund Failed\n";
      }
    }
  }
  $stripeProcessor = new StripeProccessor("sk_kk");
  $paypalProcessor = new PayPalProccessor("paypal_7Z0sL6m_1pQ8rT4_X5cY7_H2z");
  $cashProcessor = new CashPaymentProcessor();

  $stripeOrder = new OrderProccessor($stripeProcessor);
  $paypalOrder = new OrderProccessor($paypalProcessor);
  $cashOrder = new OrderProccessor($cashProcessor);


  $stripeOrder->processOrder(100.00);
  $paypalOrder->processOrder(150.00);
  $cashOrder->processOrder(50.00);


  $stripeOrder->refundOrder(25.00);
  $paypalOrder->refundOrder(50.00);
  $cashOrder->refundOrder(10.00);
