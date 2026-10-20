<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Invoice Manager</title>
    <link rel="stylesheet" href="assets/css/output.css">
</head>
<body class="min-h-screen bg-slate-950 text-white flex items-center justify-center p-6">

    <main class="w-full max-w-2xl rounded-2xl border border-slate-700 bg-slate-900 p-8 text-center shadow-2xl sm:p-12">

        <div class="mx-auto mb-6 flex h-20 w-20 items-center justify-center rounded-2xl bg-blue-600 text-3xl font-bold shadow-lg">
            IM
        </div>

        <p class="mb-3 text-sm font-semibold uppercase tracking-[0.25em] text-blue-400">
            Personal Finance Organizer
        </p>

        <h1 class="mb-5 text-3xl font-bold tracking-tight sm:text-5xl">
            Welcome to Invoice Manager
        </h1>

        <p class="mx-auto mb-8 max-w-lg leading-7 text-slate-300">
            Keep your invoices organized, manage your stores, and track your product warranties in one place.
        </p>

        <div class="flex flex-col justify-center gap-3 sm:flex-row">
            <a href="login.php"
               class="rounded-lg bg-blue-600 px-6 py-3 font-semibold transition hover:bg-blue-500">
                Sign In
            </a>

            <a href="register.php"
               class="rounded-lg border border-slate-600 px-6 py-3 font-semibold transition hover:bg-slate-800">
                Create Account
            </a>
        </div>


    </main>

</body>
</html>