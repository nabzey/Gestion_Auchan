<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Groupe</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dark-green': '#1a2e1a',
                        'medium-green': '#2d4a2d',
                        'light-green': '#3d5a3d',
                        'accent-green': '#4ade80'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-900 text-white min-h-screen">
    <nav class="bg-dark-green border-b border-gray-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <span class="text-white font-bold text-lg"></span>
                    </div>
                </div>
                <div class="flex space-x-8">
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    <a href="/commandes/liste" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Commandes</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Clients</a>
                    <a href="#" class="text-gray-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Produits</a>
                    <button class="text-gray-300 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5-5-5h5V12h5z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">

        <div class="bg-dark-green rounded-lg p-6 shadow-lg">
            <h1 class="text-2xl font-bold text-white mb-8">Nouveau Commande</h1>
            
            <form method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Client</label>
                        <select name="client_id" class="w-full bg-medium-green border border-gray-600 rounded-md px-3 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green">
                            <option value="">Sélectionner client</option>
            
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-300 mb-2">Paiement</label>
                        <input type="number" name="paiement" placeholder="Entrer le montant" 
                               class="w-full bg-medium-green border border-gray-600 rounded-md px-3 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green">
                    </div>
                </div>
                <div class="border-t border-gray-600 pt-6">
                    <h3 class="text-lg font-medium text-white mb-4">Ajouter Produit</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-end">
                        <div>
                            <select id="produit_select" class="w-full bg-medium-green border border-gray-600 rounded-md px-3 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green">
                                <option value="">Sélectionner un produit</option>
                                
                            </select>
                        </div>
                        <div>
                            <input type="number" id="quantite_input" placeholder="Saisir le montant" 
                                   class="w-full bg-medium-green border border-gray-600 rounded-md px-3 py-2 text-white focus:outline-none focus:ring-2 focus:ring-accent-green">
                        </div>
                        <div>
                            <button type="button" onclick="ajouterProduit()" 
                                    class="w-full bg-accent-green hover:bg-green-500 text-white px-4 py-2 rounded-md font-medium transition-colors">
                                Ajouter
                            </button>
                        </div>
                    </div>
                </div>

                <div class="bg-medium-green rounded-lg overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-light-green">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Produits</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Quantité</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Prix</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody id="produits_table" class="divide-y divide-gray-600">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">Sac de riz</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">2</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">40 000 fcfa</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm">
                                   <button class="text-red-400 hover:text-red-300" title="Supprimer">
                                   <i class="fas fa-trash"></i>
                                 </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">Sucre</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">5</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">200000 fcfa</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                   <button class="text-red-400 hover:text-red-300" title="Supprimer">
                                   <i class="fas fa-trash"></i>
                                 </button>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">Lait</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">10</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-white">1200 fcfa</td>
                                 <td class="px-6 py-4 whitespace-nowrap text-sm">
                                   <button class="text-red-400 hover:text-red-300" title="Supprimer">
                                   <i class="fas fa-trash"></i>
                                 </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center space-x-2">
                    <button type="button" class="px-3 py-1 text-gray-400 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button type="button" class="px-3 py-1 bg-accent-green text-white rounded">1</button>
                    <button type="button" class="px-3 py-1 text-gray-400 hover:text-white">2</button>
                    <button type="button" class="px-3 py-1 text-gray-400 hover:text-white">3</button>
                    <button type="button" class="px-3 py-1 text-gray-400 hover:text-white">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
                <div class="border-t border-gray-600 pt-4">
                    <div class="flex justify-between items-center">
                        <span class="text-lg font-medium text-white">Total: <span id="total">61 200 fcfa</span></span>
                        <button type="button"
                                class="bg-accent-green hover:bg-green-500 text-white px-6 py-2 rounded-md font-medium transition-colors"
                                 onclick="window.location.href='/commandes/facture'">
                               Valider commande
                             </button>
                   </button>
                    </div>
                </div>
            </form>
        </div>
    </div>