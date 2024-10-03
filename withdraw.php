<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="withdraw.css">
    <title>Withdraw Page</title>
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

.withdraw-container {
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
    color: #333;
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
    background-color: #01fd3c;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

.submit-btn:hover {
    background-color: #20cf46;
}

.error-message {
    color: red;
    font-size: 14px;
    display: none;
}
    </style>
</head>
<body>

    <div class="withdraw-container">
        <h2>Withdraw Funds</h2>
        <form id="withdrawForm">
            <label for="amount">Withdrawal Amount</label>
            <input type="number" id="amount" placeholder="Enter amount" required>

            <label for="method">Withdrawal Method</label>
            <select id="method" required>
                <option value="">Select Method</option>
                <option value="MTN">MTN</option>
                <option value="Tigo">Tigo</option>
                <option value="Airtel">Airtel</option>
            </select>

            <p class="error-message" id="error-message">Please correct the highlighted errors.</p>

            <button type="submit" class="submit-btn">Withdraw</button>
        </form>
    </div>
    <script src="withdraw.js"></script>
</body>
</html>
