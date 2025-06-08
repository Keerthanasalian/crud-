
<!--DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment completed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cssfile/paySucess.css">


    <style type="text/css">
        body{
            background-image: url(image/4.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>


</head>

<body>
    <div class="container">
        <div id="alert-additional-content-5" class="alert-box" role="alert">
            <div class="img">
                <img class="img" src="image/869563.png">
            </div>
            <div class="alert">
                <i class="fa-solid fa-circle-check ico"></i>
                <h3>Payment Successful !!!</h3>
            </div>
            <div class="alert-content alert">
                Your Payment is Successfull and thank you for geting ticket from us. 
            </div>
            <div class="alert"><a href="viewBus.php">
                <button type="button" class="button">
                    <i class="fa-solid fa-eye"></i>
                    Ok
                </button></a><a href="home.php">
                <button type="button" onclick="Close()" class="dismiss-btn" id="close">Dismiss</button></a>
            </div>
        </div>
    </div>
    <script src="js/main.js"></script>
</body>
</html-->
<!DOCTYPE html>
<html lang="en">

<head>
    <!--Subscribe to our Youtube channel "Coder ACB"-->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Completed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="cssfile/paySucess.css">

    <style type="text/css">
        body {
            background-image: url(image/3.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="alert-additional-content-5" class="alert-box" role="alert">
            <div class="img">
                <img class="img" src="image/869563.png">
            </div>
            <div class="alert">
                <i class="fa-solid fa-circle-check ico"></i>
                <h3>Payment Successful !!!</h3>
            </div>
            <div class="alert-content alert">
                Your Payment is Successful and thank you for getting a ticket from us.
            </div>
            <div class="alert">
                <a href="viewBus.php">
                    <button type="button" class="button">
                        <i class="fa-solid fa-eye"></i>
                        Ok
                    </button>
                </a>
                <a href="home.php">
                    <button type="button" onclick="Close()" class="dismiss-btn" id="close">Dismiss</button>
                </a>
            </div>
        </div>
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
            <!-- You can customize the receipt details based on your payment system >
            <button type="button" onclick="printReceipt()">Print Receipt</button>
            <button type="button" onclick="downloadReceipt()">Download Receipt</button>
        </div>
    </div>

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
