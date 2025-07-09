<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="bg-[#21301c]">
    <section class="w-full top-0 left-0 z-50 bg-[#172112] border-b border-[#21301C] h-14 flex items-center px-8">
    <div class="flex items-center gap-3 flex-shrink-0">
      <span class="flex items-center gap-2">
        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
          <rect x="2" y="4" width="3" height="10" rx="1.5" fill="white"/>
          <rect x="9.5" y="2" width="3" height="14" rx="1.5" fill="white"/>
          <rect x="17" y="4" width="3" height="10" rx="1.5" fill="white"/>
        </svg>
        <span class="text-white font-bold text-lg"></span>
      </span>
    </div>
    <div class="flex-1 flex justify-end items-center gap-3">
      <div class="flex gap-8">
        <a href="#" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Dashboard</a>
        <a href="/commandes/liste" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Commandes</a>
        <a href="#" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Clients</a>
        <a href="#" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Produits</a>
      </div>
      <span class="w-7 h-7 rounded-full bg-[#21301C] flex items-center justify-center">
        <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke-width='2' stroke='#bfcbb3' class='w-4 h-4'>
          <path stroke-linecap='round' stroke-linejoin='round' d='M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9'/>
        </svg>
      </span>
    </div>
  </section>
      <!-- Main Content -->
       <section>

    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 ">
        <!-- Title -->
        <h1 class="text-3xl font-bold text-white mb-8">Liste des commandes</h1>

        <!-- Filters -->
        <div class="flex flex-wrap gap-4 mb-8">
            <div class="relative">
                <select class="bg-[#21301c] border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none pr-8">
                    <option>Filtrer par statut</option>
                    <option>Impayé</option>
                    <option>Payé</option>
                    <option>En cours</option>
                    <option>Livré</option>
                </select>
                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            <div class="relative">
                <select class="bg-[#21301c] border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none pr-8">
                    <option>Filtrer par client</option>
                    <option>BAKARY DIASSY</option>
                    <option>ANONYME</option>
                    <option>ALI DIOP</option>
                </select>
                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
            
            <div class="relative">
                <select class="bg-[#21301c] border border-gray-600 rounded-lg px-4 py-2 text-white focus:outline-none focus:ring-2 focus:ring-green-500 appearance-none pr-8">
                    <option>Filtrer par État</option>
                    <option>Nouveau</option>
                    <option>En cours</option>
                    <option>Terminé</option>
                </select>
                <div class="absolute right-2 top-1/2 transform -translate-y-1/2 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
               <button
                class="bg-[#54d12b] hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors ml-12"
                 onclick="window.location.href='/commandes/form'">
                 Passer commande
            </button>
        </div>
        <!-- Table -->
        <div class="bg-[#21301c] rounded-lg overflow-hidden shadow-xl border border-gray-600">
            <table class="w-full">
                <thead class="bg-[#21301c] border-b-2 ">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Numéro Commande
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Client
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Status
                        </th>
                        <th class="px-6 py-4 text-left text-sm font-medium text-gray-300 uppercase tracking-wider">
                            Facture
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    <tr class="hover:bg-gray-700 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                            #COM_001
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            BAKARY DIASSY
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium bg-[#21301c] border border-gray-600 text-gray-300 rounded-full">
                                impayé
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-[#54d12b] hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                voir
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-700 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                            #COM_002
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            ANONYME
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium bg-[#21301c] border border-gray-600 text-gray-300 rounded-full">
                                impayé
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-[#54d12b] hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                voir
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-700 transition-colors">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-white">
                            #COM_003
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-300">
                            ALI DIOP
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 text-xs font-medium bg-[#21301c] border border-gray-600 text-gray-300 rounded-full">
                                impayé
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-[#54d12b] hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-medium transition-colors">
                                voir
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex justify-center mt-8">
            <nav class="flex items-center space-x-2">
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                </button>
                
                <button class="w-10 h-10 rounded-full bg-[#54d12b] text-white font-medium">
                    1
                </button>
                
                <button class="w-10 h-10 rounded-full bg-gray-700 text-gray-300 font-medium hover:bg-gray-600 transition-colors">
                    2
                </button>
                
                <button class="w-10 h-10 rounded-full bg-gray-700 text-gray-300 font-medium hover:bg-gray-600 transition-colors">
                    3
                </button>
                
                <button class="p-2 text-gray-400 hover:text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </nav>
        </div>
    </main>

    <script>
        // Ajout d'interactivité pour les filtres
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('change', function() {
                console.log('Filtre sélectionné:', this.value);
                // Ici vous pourriez ajouter la logique de filtrage
            });
        });

        // Ajout d'interactivité pour les boutons
        document.querySelectorAll('button').forEach(button => {
            if (button.textContent === 'voir') {
                button.addEventListener('click', function() {
                    console.log('Voir la facture cliquée');
                    // Ici vous pourriez ajouter la logique pour afficher la facture
                });
            }
        });
    </script>
       </section>
</body>
</html>