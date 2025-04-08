<?php

/**
 * Page contact
 * Traitement du formulaire de contact
 * et envoi de l'email avec mailTrap
 */

$firstname = htmlspecialchars($_POST['firstname'] ?? '',);
$lastname = htmlspecialchars($_POST['lastname'] ?? '');


?>



<h1 class="py-10 bg-clip-text bg-gradient-to-br from-slate-800 to-slate-400 text-6xl font-bold text-transparent text-center">
    Me Contacter
</h1>
<div class="m-4 shadow">
    <form action="" method="post" class="">
        <div class="border border-slate-200 rounded-lg px-4 py-2 foucus:border-slate-400 focus:shadow-md focus:outline-none">
            <select name="objet" id="objet" class="bg-transparent text-slate-800 w-full">
                <option value="Collaboration">Collaboration</option>
                <option value="Formation">Formation</option>
                <option value="Devis gratuis">Devis gratuis</option>
                <option value="Autre">Autre...</option>
            </select>

        </div>
        <div class="flex grab-4 my-4">

            <div class="flex flex-col gap-2">
                <label for="firstname" class="font-semibold text-lg">Votre prénom : </label>
                <input type="text" name="firstname" id="firstname" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" placeholder="martine" value="martine" minlength="2" maxlength="80" required>
            </div>

            <div class="flex flex-col gap-2">
                <label for="lastname" class="font semibold text-lg">Votre nom : </label>
                <input type="text" name="lastname" id="lastname" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" placeholder="dupont" value="dupont" minlength="2" maxlength="80" required>
            </div>
            
            
        </div>

        <div class="flex grab-4 my-4">


        <div class="flex flex-col gap-2">
                <label for="mail" class="font semibold text-lg">Votre mail : </label>
                <input type="mail" name="mail" id="mail" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" placeholder="dupont@mail.com" value="dupont@mail.com" minlength="2" maxlength="80" required>
            </div>

            <div class="flex flex-col gap-2">
                <label for="lastname" class="font semibold text-lg">Votre numéro : </label>
                <input type="tel" name="lastname" id="lastname" class="border border-slate-200 rounded-lg px-4 py-2 focus:border-slate-400 focus:shadow-md focus:outline-none" placeholder="0612345678" value="0612345678" minlength="10" maxlength="12" required>
            </div>

        </div>
        
        <textarea name="" id="" rows="1"></textarea>



        

      


        <button type="submit" class="bg-wite text-slate-800 rounded-lg shadow-md p-2 hover:text-wite hover:bg-slate-800">
            Envoyer
        </button>


    </form>
</div>





<!-- <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
    <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
        <div>
            <label for="first-name" class="block text-sm/6 font-semibold text-gray-900">Prénom</label>
            <div class="mt-2.5">
                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required>
            </div>
        </div>
        <div>
            <label for="last-name" class="block text-sm/6 font-semibold text-gray-900">Nom</label>
            <div class="mt-2.5">
                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="company" class="block text-sm/6 font-semibold text-gray-900">Entreprise</label>
            <div class="mt-2.5">
                <input type="text" name="company" id="company" autocomplete="organization" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600">
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="email" class="block text-sm/6 font-semibold text-gray-900">Adresse email</label>
            <div class="mt-2.5">
                <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required>
            </div>
        </div>
        <div class="sm:col-span-2">
            <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
            <div class="mt-2.5">
                <textarea name="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required></textarea>
            </div>
        </div>
    </div>
    <div class="mt-10">
        <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Envoyer</button>
    </div>
</form> -->