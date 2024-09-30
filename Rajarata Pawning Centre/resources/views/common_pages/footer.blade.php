<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        footer {
            background-color: #000;
            color: #fff;
            padding: 30px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .footer-left, .footer-right, .footer-branches {
            width: 30%;
            text-align: center;
        }

        .footer-left {
            text-align: left;
        }

        .footer-right {
            text-align: right;
        }

        .footer-left p, .footer-branches p {
            margin: 5px 0;
        }

        .footer-right ul {
            list-style: none;
            padding: 0;
        }

        .footer-right ul li {
            margin: 5px 0;
        }

        .social-icons {
            margin-top: 10px;
            text-align: right;
        }

        .social-icons a {
            margin-left: 10px;
            color: #fff;
            font-size: 20px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #ccc;
        }

        .divider {
            width: 100%;
            height: 3px;
            background-color: #e9e1e1;
            margin: 15px 0;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 30px;
            background-color: #000;
        }

        .copyright {
            color: #aaa;
            font-size: 14px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            footer {
                flex-direction: column;
                align-items: center;
            }
            .footer-left, .footer-right, .footer-branches {
                width: 100%;
                margin-bottom: 20px;
            }
            .footer-left {
                text-align: center;
            }
            .footer-right {
                text-align: center;
            }

            .footer-bottom {
                flex-direction: column;
                text-align: center;
            }

            .social-icons {
                text-align: center;
                margin-top: 10px;
            }
        }
    </style>
</head>
<body>

    <footer>
        <div class="footer-left">
            <h3>Rajarata Pawning Center - RCP</h3>
            <p>rcp@gmail.com</p>
            <p>RCP,<br>
               dhbgdvvsdvbhsdbvhbsdjbh
            </p>
        </div>
        
        <div class="footer-branches">
            <h3>Branches</h3>
            <p>Branch 1: Address of Branch 1</p>
            <p>Branch 2: Address of Branch 2</p>
            <p>Branch 3: Address of Branch 3</p>
        </div>

        <div class="footer-right">
            <h3>Pages</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Service</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </footer>

    <div class="divider"></div>
    
    <div class="footer-bottom">
        <div class="copyright">
            Copyright RCP © 2024. All rights reserved
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>

    <!-- Font Awesome CDN -->
    <script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
    
</body>
</html>
