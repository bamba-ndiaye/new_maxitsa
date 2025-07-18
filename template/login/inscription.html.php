<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black min-h-screen">
    <div class="h-screen flex">
        <!-- Partie gauche - fond marron -->
        <div class="w-1/4 bg-yellow-700">
        </div>
        
        <!-- Partie droite - fond gris clair -->
        <div class="w-3/4 bg-gray-100 flex flex-col justify-center px-16">
            <div class="max-w-2xl mx-auto w-full">
                <div class="border-t-4 border-yellow-700 mb-8"></div>
                
                <h1 class="text-yellow-700 text-3xl font-bold mb-12 text-center">créer un compte<br>principal</h1>
                
                <div class="space-y-6">
                    <div class="flex gap-4">
                        <div class="w-1/2">
                            <input type="text" placeholder="Nom" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                        </div>
                        <div class="w-1/2">
                            <input type="text" placeholder="Prenom" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                        </div>
                    </div>
                    
                    <div>
                        <input type="tel" placeholder="Numéro telephone" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                    </div>
                    
                    <div>
                        <input type="text" placeholder="Adresse" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                    </div>
                    
                    <div>
                        <input type="text" placeholder="Numero de carte d' identité" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                    </div>
                    <div class="flex gap-4">
                        <div class="w-1/2">
                            <input type="text" placeholder="Recto" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                        </div>
                        <div class="w-1/2">
                            <input type="text" placeholder="Verso" class="w-full p-4 rounded-lg bg-yellow-700 text-white placeholder-white text-lg">
                        </div>
                    </div>
                    
                    
                    <div class="mt-8">
                        <a href="">
                            <button class="w-full bg-yellow-700 text-white py-4 rounded-lg font-semibold text-lg">
                                 <a href="/compte">Créer un compte</a>
                            </button>
                        </a>
                    </div>

                    <div class="mt-4">
                        <a href="/">
                            <button class="w-full bg-gray-400 text-black py-4 rounded-lg font-semibold text-lg">
                                Retour à la connexion
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>