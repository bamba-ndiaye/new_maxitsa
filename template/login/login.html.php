<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max it Partenaires</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen">
    <div class="h-screen flex">
        <!-- Partie gauche - fond gris clair -->
        <div class="w-1/2 bg-gray-300 flex items-center justify-center">
            <div class="border-2 border-gray-500 p-6">
                <div class="bg-black rounded-3xl w-64 h-64 flex flex-col items-center justify-center">
                    <div class="text-white text-4xl font-bold">
                        Max <span class="text-orange-500">it</span>
                    </div>
                    <div class="text-orange-500 text-lg mt-2">
                        Partenaires
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Partie droite - fond marron -->
        <div class="w-1/2 bg-yellow-700 flex flex-col justify-center px-12">
            <div class="text-white">
                <h1 class="text-3xl font-normal mb-12 text-center">connexion</h1>
                
                <form class="space-y-6" method="POST" action="/login">
                    <div>
                        <label class="block text-white text-xl font-semibold mb-3">Nom</label>
                        <input type="text" name="login" class="w-full p-4 rounded-lg border-none outline-none text-gray-800">
                    </div>
                    
                    <div>
                        <label class="block text-white text-xl font-semibold mb-3">password</label>
                        <input type="password" name="password" class="w-full p-4 rounded-lg border-none outline-none text-gray-800">
                    </div>
                    
                    <div class="text-center mt-8">
                        <button class="bg-yellow-200 text-yellow-800 px-10 py-3 rounded-lg font-semibold text-lg">
                            Connecter
                        </button>
                    </div>
                </form>
                
                <div class="text-center mt-8">
                    <a href="/register">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>