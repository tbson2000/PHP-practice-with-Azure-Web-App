<!DOCTYPE html>
<html>
<head>
    <title>Database Connection Test</title>
</head>
<body>
    <h1>Database Connection Test</h1>
    <form action="{{ route('test-database-connection') }}" method="post">
        @csrf
        <label for="host">Host:</label>
        <input type="text" name="host" required><br><br>

        <label for="database">Database:</label>
        <input type="text" name="database" required><br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Run Test</button>
    </form>

    @isset($result)
            <p>{{ $result }}</p>
        </div>
    @endisset

</body>
</html>
