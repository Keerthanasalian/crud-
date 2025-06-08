<?php
session_start();

include("connection.php");
include("function.php");

$user_data = check_login($conn);

// Fetch the latest payment details from the database
$sql = "SELECT * FROM payment ORDER BY payment_id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $payment = $result->fetch_assoc();
} else {
    echo "No payment record found.";
    exit();
}
?>

<!DOCTYPE html>
<htm lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <link rel="stylesheet" href="cssfile/receipt.css">
</head>
<body></body>
    <div class="container">
        <div class="receipt">
            <h2>Payment Receipt</h2>
            <p><strong>Receipt ID:</strong> <?php echo $payment['payment_id']; ?></p>
            <p><strong>Card Name:</strong> <?php echo htmlspecialchars($payment['card_name']); ?></p>
            <p><strong>Card Number:</strong> <?php echo htmlspecialchars(substr($payment['card_number'], -4)); ?> </p>
            <p><strong>Expiry month:</strong> <?php echo htmlspecialchars($payment['exp_month']) ; ?></p>
            <p><strong>Expiry year:</strong> <?php echo htmlspecialchars($payment['exp_year']); ?></p>
            <p><strong>CVV:</strong> <?php echo htmlspecialchars($payment['cvv']) ; ?></p>
            <p><strong>Amount Paid:</strong> <?php echo htmlspecialchars($payment['amount']); ?></p>
            
            
            
        </div>
    </div>
   
            <a href="home.php" class="btn">Back to Home</a>
            <!-- Receipt Section >
        <div class="receipt-section">
            <h3>Receipt</h3>
            <p>Thank you for your purchase. Here is your receipt:</p>
            <!-- Insert receipt details here, like transaction ID, amount, date, etc. -->
            <!-- Example:
            <p>Transaction ID: ABC123</p>
            <p>Amount: $50.00</p>
            <p>Date: June 5, 2024</p>
            -->
            <!-- You can customize the receipt details based on your payment system -->
            <button type="button" onclick="printReceipt()">Print Receipt</button>
            <button type="button" onclick="downloadReceipt()">Download Receipt</button>
    
    

    <script src="js/main.js"></script>
    <script>
        function printReceipt() {
            
            window.print();
        }

        function downloadReceipt() {
            // Implement downloading functionality
            // For example, create a PDF with receipt details and provide a link to download
            // You can use libraries like jsPDF or html2pdf to generate PDFs
            // Example using jsPDF:
            // var doc = new jsPDF();
            // doc.text("Receipt Details:", 10, 10);
            // doc.save("receipt.pdf");
        }
    </script>
</body>

</html>

        </div>
    </div>
</body>
</html>
