<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deposit Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .deposit-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color:black; /* Green color */
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        .submit-btn {
            background-color: #03fa3d;
            color: white;
            border: none;
            padding: 10px 15px;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .submit-btn:hover {
            background-color: #1acf41;
        }

        .error-message {
            color: red;
            font-size: 14px;
            display: none;
        }
    </style>
</head>
<body>

    <div class="deposit-container">
        <h2>Deposit Funds</h2>
        <form id="depositForm">
            <label for="amount">Deposit Amount</label>
            <input type="number" id="amount" placeholder="Enter amount in FRW" required>

            <label for="method">Payment Method</label>
            <select id="method" required>
                <option value="">Select Method</option>
                <option value="MTN">MTN</option>
                <option value="Tigo">Tigo</option>
                <option value="Airtel">Airtel</option>
            </select>

            <p class="error-message" id="error-message">Please correct the highlighted errors.</p>

            <button type="submit" class="submit-btn">Deposit</button>
        </form>
    </div>

    <script>
        document.getElementById('depositForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Clear previous errors
            let errorMessage = document.getElementById('error-message');
            errorMessage.style.display = 'none';

            let amount = document.getElementById('amount').value;
            let method = document.getElementById('method').value;
            
            // Minimum and Maximum limits for deposit in FRW
            let minAmount = 10;
            let maxAmount = 10000000;

          
            if (amount < minAmount || amount > maxAmount) {
                errorMessage.textContent = `Deposit amount must be between ${minAmount.toLocaleString()} FRW and ${maxAmount.toLocaleString()} FRW.`;
                errorMessage.style.display = 'block';
                return;
            }

            // Validate the method selection
            if (!method) {
                errorMessage.textContent = 'Please select a payment method.';
                errorMessage.style.display = 'block';
                return;
            }

            // If everything is okay, submit the form (for now, just log the values)
            console.log('Deposit successful!', {
                amount: amount,
                method: method
            });

            // You can now submit the form via AJAX or perform other actions.
            alert(`Deposit of ${parseInt(amount).toLocaleString()} FRW via ${method} method is being processed.`);
        });
    </script>

</body>
</html>
