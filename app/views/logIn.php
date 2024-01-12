<?php
ob_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com/"></script>
</head>


<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
</style>

<div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
    <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-1/2 overflow-hidden" style="max-width:1000px">
        <div class=" w-full">
            <form action="index.php?action=logInSubmit" method="post">
                <div class="w-full py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">Log In</h1>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">User name</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="text" name="UserName" id="userName"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="John">
                            </div>
                            <div id="userNameError" class="text-xs text-red-500 mt-1"></div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <label for="" class="text-xs font-semibold px-1">Email</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="email" name="email" id="email"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="johnsmith@example.com">
                            </div>
                            <div id="emailError" class="text-xs text-red-500 mt-1"></div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-12">
                            <label for="" class="text-xs font-semibold px-1">Password</label>
                            <div class="flex">
                                <div
                                    class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                    <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                </div>
                                <input type="password" name="password" id="password"
                                    class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                    placeholder="************">
                            </div>
                            <div id="passwordError" class="text-xs text-red-500 mt-1"></div>
                        </div>
                    </div>
                    <div class="flex -mx-3">
                        <div class="w-full px-3 mb-5">
                            <button
                                class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Log
                                In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>
<script>
        // Fonction pour afficher les messages d'erreur
        function showError(element, message) {
            var errorElement = document.getElementById(element + "Error");
            errorElement.textContent = message;
        }

        // Fonction pour effacer les messages d'erreur
        function clearError(element) {
            var errorElement = document.getElementById(element + "Error");
            errorElement.textContent = "";
        }

        document.addEventListener('DOMContentLoaded', function () {
            var userNameInput = document.getElementById('userName');
            var emailInput = document.getElementById('email');
            var passwordInput = document.getElementById('password');

            userNameInput.addEventListener('input', function () {
                clearError('userName');
                if (!/^[a-zA-Z]+$/.test(userNameInput.value)) {
                    showError('userName', 'Le prénom doit contenir uniquement des lettres.');
                }
            });
            emailInput.addEventListener('input', function () {
                clearError('email');
                var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                if (!emailPattern.test(emailInput.value)) {
                    showError('email', 'Veuillez entrer une adresse e-mail valide.');
                }
            });

            passwordInput.addEventListener('input', function () {
                clearError('password');
                if (!/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/.test(passwordInput.value)) {
                    showError('password', 'Au moins une lettre minuscule, une lettre majuscule, un chiffre, Longueur minimale de 8 caractères.');
                }
            });
        });
    </script>
<?php
$content = ob_get_clean();

include_once 'layout.php';
?>