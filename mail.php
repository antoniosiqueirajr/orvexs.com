<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Orvexs</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="min-h-screen bg-gradient-to-br from-blue-600 to-indigo-800 flex items-center justify-center">
    <div class="bg-white rounded-2xl shadow-2xl p-10 w-full max-w-md">
        <div class="flex flex-col items-center mb-8">
            <img src="/logo.png" alt="Logo" class="w-20 h-20 mb-4">
            <h1 class="text-3xl font-bold text-gray-800 mb-2">Bem-vindo ao Portal Orvexs</h1>
            <p class="text-gray-500">Acesse sua conta para continuar</p>
        </div>
        <form method="POST" action="https://sogo.seudominio.com/SOGo/connect" class="space-y-6">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div>
                <label for="user" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input id="user" name="user" type="text" required placeholder="email@dominio.com" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input id="password" name="password" type="password" required placeholder="Sua senha" class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
            </div>
            <button type="submit" class="w-full py-3 px-4 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md transition duration-200">Entrar</button>
        </form>
    </div>
</body>
</html>
