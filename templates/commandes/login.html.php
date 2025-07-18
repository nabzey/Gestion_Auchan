<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#21301c] flex items-center justify-center min-h-screen">
    <div class="bg-[#172112] p-8 rounded-2xl shadow-lg w-full max-w-sm border border-[#2d4024]">
        <h2 class="text-white text-2xl font-bold mb-6 text-center">Connexion</h2>
        <?php if (isset($errorMessage) && $errorMessage): ?>
            <div class="text-red-500 text-sm mb-2"><?= $errorMessage ?></div>
        <?php endif; ?>
        <form action="/login" method="POST" class="flex flex-col gap-4">
            <div>
                <label class="block text-sm text-gray-300 mb-1" for="email">Adresse e-mail</label>
                <input type="email" name="email" id="email"
                    class="w-full px-4 py-2 rounded-lg bg-[#21301c] border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div>
                <label class="block text-sm text-gray-300 mb-1" for="password">Mot de passe</label>
                <input type="password" name="password" id="password"
                    class="w-full px-4 py-2 rounded-lg bg-[#21301c] border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <button type="submit"
                class="bg-[#54d12b] hover:bg-green-600 text-white px-4 py-2 rounded-lg font-semibold transition-colors">
                Se connecter
            </button>
        </form>
        <p class="text-sm text-gray-400 text-center mt-4">
            Pas encore de compte ? <a href="#" class="text-green-400 hover:underline">S’inscrire</a>
        </p>
    </div>
</body>
</html>
