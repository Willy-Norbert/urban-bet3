document.getElementById('withdrawForm').addEventListener('submit', function(e) {
  e.preventDefault();

  // Clear previous errors
  let errorMessage = document.getElementById('error-message');
  errorMessage.style.display = 'none';

  let amount = document.getElementById('amount').value;
  let method = document.getElementById('method').value;
  
  // Minimum and Maximum limits for withdrawal
  let minAmount = 100;
  let maxAmount = 50000;

 
  if (amount < minAmount || amount > maxAmount) {
      errorMessage.textContent = `Withdrawal amount must be between FRW${minAmount} and FRW${maxAmount}.`;
      errorMessage.style.display = 'block';
      return;
  }

  
  if (!method) {
      errorMessage.textContent = 'Please select a withdrawal method.';
      errorMessage.style.display = 'block';
      return;
  }

  
  console.log('Withdrawal successful!', {
      amount: amount,
      method: method
  });

 
  alert(`Withdrawal of FRW${amount} via ${method} method is being processed.`);
  });