<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Mock API</title>

    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            margin: 0;
            padding: 2rem;
            line-height: 1.6;
        }
        h1 {
            font-size: 2rem;
            font-weight: 600;
        }
        a {
            color: #ef4444;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .container {
            max-width: 720px;
            margin: 0 auto;
            padding: 2rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }
        ul {
            padding-left: 1rem;
        }
        code {
            background: #f3f4f6;
            padding: 0.2rem 0.4rem;
            border-radius: 4px;
            display: block;
            margin-top: 0.5rem;
        }
        footer {
            margin-top: 2rem;
            font-size: 0.875rem;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Laravel Mock API Service</h1>
        <p>Welcome! This backend microservice exposes simple mock API endpoints for demonstration and testing purposes.</p>

        <h2>Available API Endpoints:</h2>
        <ul>
            <li>
                <strong>All Startup Names:</strong><br>
                <a href="{{ url('/api/startup-names') }}">{{ url('/api/startup-names') }}</a>
            </li>
            <li>
                <strong>Filtered Startup Names (category=Fintech):</strong><br>
                <a href="{{ url('/api/startup-names?category=Fintech') }}">{{ url('/api/startup-names?category=Fintech') }}</a>
            </li>
            <li>
                <strong>Sample Business Ideas:</strong><br>
                <a href="{{ url('/api/business-ideas') }}">{{ url('/api/business-ideas') }}</a>
            </li>
            <li>
                <strong>User Submissions:</strong><br>
                <a href="{{ url('/api/submissions') }}">{{ url('/api/submissions') }}</a>
            </li>
        </ul>

        <h2>Sample Startup Response:</h2>
        <code>{
    "startup_names": [
        {
            "name": "FinPilot",
            "category": "Fintech"
        }
    ]
}</code>
        <footer>
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
</body>
</html>
