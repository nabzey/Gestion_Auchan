<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Commande</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-[#21301c] text-white font-sans">
    <section class="w-full top-0 left-0 z-50 bg-[#172112] border-b border-[#21301C] h-14 flex items-center px-8">
    <div class="flex items-center gap-3 flex-shrink-0">
      <span class="flex items-center gap-2">
        <svg width="22" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6">
          <rect x="2" y="4" width="3" height="10" rx="1.5" fill="white"/>
          <rect x="9.5" y="2" width="3" height="14" rx="1.5" fill="white"/>
          <rect x="17" y="4" width="3" height="10" rx="1.5" fill="white"/>
        </svg>
        <span class="text-white font-bold text-lg">L'alchimiste du code</span>
      </span>
    </div>
    <div class="flex-1 flex justify-end items-center gap-3">
      <div class="flex gap-8">
        <a href="#" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Dashboard</a>
        <a href="#" class="text-white text-sm opacity-85 hover:text-[#54D12B] hover:opacity-100 transition-colors">Commandes</a>
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
    <div class="max-w-4xl mx-auto p-6">
      <!-- En-tête -->
      <div class="flex justify-between items-start mb-8">
        <div>
          <h1 class="text-3xl font-bold text-white mb-2">Commande #12345</h1>
          <p class="text-[[#162111]]">Commande le 02/20/2000</p>
        </div>
        <div class="text-right text-sm text-gray-400">
        <p>Nom : DIASSY</p>
        <p>Prénom : BAKARY</p>
        <p>Téléphone : 777777777</p>
        <p>Total : 1370.00cfa</p>
        <p>Montant payé : 1500 FCFA</p>
        <p>Statut : 
        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
            impayé
        </span>
    </p>
</div>
      </div>

      <!-- Résumé de la Commande -->
      <div class="mb-8">
        <h2 class="text-xl font-semibold mb-4">Résumé de la Commande</h2>
        <div class="bg-[#21301d] rounded-lg overflow-hidden">
          <div
            class="grid grid-cols-4 gap-4 p-4 bg-[#21301d] text-sm font-medium"
          >
            <div>Produit</div>
            <div>Quantité</div>
            <div>Prix</div>
            <div>Total</div>
          </div>
          <div class="divide-y divide-white-500">
            <div class="grid grid-cols-4 gap-4 p-4 text-sm">
              <div>Riz</div>
              <div>100</div>
              <div>10000</div>
              <div>1000.000fcfa</div>
            </div>
            <div class="grid grid-cols-4 gap-4 p-4 text-sm">
              <div>Lait</div>
              <div>50</div>
              <div>2000</div>
              <div>2000000fcfa</div>
            </div>
            <div class="grid grid-cols-4 gap-4 p-4 text-sm">
              <div>sucre</div>
              <div>200</div>
              <div>500</div>
              <div>5000000fcfa</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Pagination -->
      <div class="flex justify-center items-center space-x-2 mb-8">
        <button
          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white"
        >
          <svg
            class="w-4 h-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M15 19l-7-7 7-7"
            ></path>
          </svg>
        </button>
        <button
          class="w-8 h-8 flex items-center justify-center bg-[#55d02c] text-white rounded-full font-medium"
        >
          1
        </button>
        <button
          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white"
        >
          2
        </button>
        <button
          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white"
        >
          3
        </button>
        <button
          class="w-8 h-8 flex items-center justify-center text-gray-400 hover:text-white"
        >
          <svg
            class="w-4 h-4"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
          >
            <path
              stroke-linecap="round"
              stroke-linejoin="round"
              stroke-width="2"
              d="M9 5l7 7-7 7"
            ></path>
          </svg>
        </button>
      </div>

     

      <!-- Paiement -->
      <div>
        <h2 class="text-xl font-semibold mb-4">Paiement</h2>
        <div class="bg-[bg-[#21301d]] rounded-lg overflow-hidden mb-4">
          <div
            class="grid grid-cols-4 gap-4 p-4 bg-[#21301d] text-sm font-medium"
          >
            <div>Date</div>
            <div>Montant Total</div>
            <div>Méthode</div>
            <div>Status</div>
          </div>
          <div class="grid grid-cols-4 gap-4 p-4 text-sm">
            <div>July 17, 2024</div>
            <div>200000fca</div>
            <div>Carte Credit</div>
            <div>
              <span
                class="bg-[#55d02c] text-white px-2 py-1 rounded-full text-xs"
                >Payé</span
              >
            </div>
          </div>
        </div>
        <button
          class="bg-[#55d02c] hover:bg-gre55d02cen-600 text-gray-900 px-4 py-2 rounded-md text-sm font-medium"
        >
          Telechargement 
        </button>
      </div>
    </div>
  </body>
</html>
