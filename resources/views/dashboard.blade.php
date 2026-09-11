<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            background: #f5f6ff;
        }

        /* Navigation */
        .navbar {
            height: 70px;
            background: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 7%;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #667eea;
            font-size: 22px;
            font-weight: bold;
        }

        .brand-logo {
            width: 42px;
            height: 42px;
            background: #667eea;
            color: white;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .logout-button {
            background: #667eea;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.2s;
        }

        .logout-button:hover {
            background: #5568d9;
        }

        /* Main */
        .main {
            min-height: calc(100vh - 70px);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        .welcome-card {
            width: 100%;
            max-width: 800px;
            background: white;
            border-radius: 20px;
            padding: 60px 40px;
            text-align: center;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        }

        .welcome-icon {
            width: 90px;
            height: 90px;
            margin: 0 auto 25px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
        }

        h1 {
            color: #222;
            font-size: 36px;
            margin-bottom: 12px;
        }

        .username {
            color: #667eea;
        }

        .welcome-text {
            color: #777;
            font-size: 17px;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .info-box {
            background: #f5f6ff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
        }

        .info-box p {
            color: #555;
            margin: 6px 0;
        }

        .info-box strong {
            color: #333;
        }

        .dashboard-message {
            color: #667eea;
            font-weight: bold;
            font-size: 15px;
        }

        @media (max-width: 600px) {
            .navbar {
                padding: 0 20px;
            }

            .brand span {
                display: none;
            }

            .welcome-card {
                padding: 40px 25px;
            }

            h1 {
                font-size: 28px;
            }
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar">

        <div class="brand">
            <div class="brand-logo">
                LG
            </div>

            <span>My Account</span>
        </div>

        <!-- Logout -->
        <form action="/logout" method="POST">
            @csrf

            <button type="submit" class="logout-button">
                Logout
            </button>
        </form>

    </nav>


    <!-- Dashboard -->
    <main class="main">

        <div class="welcome-card">

            <div class="welcome-icon">
                ✓
            </div>

            <h1>
                Welcome,
                <span class="username">
                    {{ auth()->user()->name }}
                </span>!
            </h1>

            <p class="welcome-text">
                You have successfully logged in to your account.
                Welcome to your dashboard!
            </p>

            <div class="info-box">

                <p>
                    <strong>Name:</strong>
                    {{ auth()->user()->name }}
                </p>

                <p>
                    <strong>Email:</strong>
                    {{ auth()->user()->email }}
                </p>

            </div>

            <p class="dashboard-message">
                Your account is ready to use.
            </p>

        </div>

    </main>

</body>
</html>