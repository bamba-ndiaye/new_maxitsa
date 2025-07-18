<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max it Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">
    <div class="flex h-screen">
        <!-- Sidebar gauche -->
        <div class="w-1/5 bg-yellow-700 text-white flex flex-col">
            <!-- Logo -->
            <div class="p-6">
                <div class="border-4 border-white rounded-lg p-4 text-center">
                    <div class="text-white text-2xl font-bold">
                        MAX <span class="text-orange-300">it</span>
                    </div>
                </div>
            </div>

            <!-- Menu -->
            <div class="flex-1 px-4 space-y-4">
                <div class="flex items-center space-x-3 p-3 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span class="text-lg">Accueil</span>
                </div>

                <div class="flex items-center space-x-3 p-3 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 000 2h1a1 1 0 100-2H9z" />
                    </svg>
                    <span class="text-lg">payements</span>
                </div>

                <div class="flex items-center space-x-3 p-3 rounded">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                    </svg>
                    <span class="text-lg">Transactions</span>
                </div>

                <div class="flex items-center space-x-3 p-3 rounded bg-yellow-600">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-lg">Mes comptes</span>
                </div>
            </div>
        </div>

        <!-- Contenu principal -->
        <div class="flex-1 flex flex-col">
            <!-- Header -->
            <div class="bg-white p-4 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <div class="relative flex-1 max-w-lg">
                        <svg class="absolute left-3 top-3 w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        <input type="text" placeholder="recherche" class="w-full pl-10 pr-4 py-2 border-2 border-blue-400 rounded-lg bg-gray-200">
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <div class="w-10 h-10 bg-gray-400 rounded-full"></div>

                    <a href="/">
                        <button class="bg-red-600 text-white px-6 py-2 rounded-lg font-semibold">
                            Déconnexion
                        </button>
                    </a>
                </div>
            </div>

            <!-- Zone d'affichage du solde -->
            <div class="bg-gradient-to-br from-blue-600 to-purple-700 h-32 mx-4 mt-4 rounded-lg shadow-lg relative overflow-hidden">
                <!-- Effet de brillance -->
                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent transform -skew-x-12 animate-pulse"></div>

                <!-- Contenu du solde -->
                <div class="relative z-10 h-full flex flex-col justify-center items-center text-white">
                    <div class="text-sm font-medium opacity-90 mb-1">SOLDE DU COMPTE</div>
                    <div class="text-3xl font-bold">
                        <?= number_format($solde ?? 0, 0, ',', ' ') ?> FCFA 
                    </div>
                    <div class="text-xs opacity-75 mt-1">Mis à jour maintenant</div>
                </div>

                <!-- Icône coin supérieur droit -->
                <div class="absolute top-3 right-3 w-6 h-6 bg-white/20 rounded-full flex items-center justify-center">
                    <span class="text-white text-xs font-bold">Fcfa</span>
                </div>

                <!-- Indicateur de statut -->
                <div class="absolute bottom-3 left-3 w-2 h-2 bg-green-400 rounded-full animate-pulse"></div>
            </div>
            <!-- Boutons actions -->
            <div class="p-4 flex space-x-4">
                <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg">
                    consulter mes transaction
                </button>
                <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg">
                    lister compte
                </button>
                <button class="bg-gray-300 text-gray-800 px-6 py-2 rounded-lg">
                    créer un compte secondaire
                </button>
            </div>

            <!-- Tableau des transactions -->
            <div class="mx-4 mb-4 bg-white rounded-lg border-2 border-black p-6">
                <div class="space-y-4">
                    <div class="flex items-center justify-between py-4 border-b">
                        <div class="text-lg font-medium">Payement</div>
                        <div class="text-orange-600">07/08/2025</div>
                        <div class="text-lg">-50000 fr</div>
                        <div class="text-green-600 font-medium">reussi</div>
                    </div>

                    <div class="flex items-center justify-between py-4 border-b">
                        <div class="text-lg font-medium">Depot</div>
                        <div class="text-orange-600">01/08/2025</div>
                        <div class="text-lg">+150 000 fr</div>
                        <div class="text-green-600 font-medium">reussi</div>
                    </div>

                    <div class="flex items-center justify-between py-4">
                        <div class="text-lg font-medium">retrait</div>
                        <div class="text-orange-600">07/05/2025</div>
                        <div class="text-lg">-45000 fr</div>
                        <div class="text-red-600 font-medium">echec</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>