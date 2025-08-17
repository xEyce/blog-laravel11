<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eyce's Blog</title>

    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <nav>
            <h1>EYCE</h1>
            <a href="/eyce">All Blogs</a>
            <a href="/eyce/create">Create New Blog</a>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>