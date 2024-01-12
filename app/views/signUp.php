<?php
ob_start();
?>

<body class="h-screen overflow-hidden flex items-center justify-center" style="background: #edf2f7;">

    <style>
        @import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');
    </style>

    <div class="min-w-screen min-h-screen flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-1/2 overflow-hidden" style="max-width:1000px">
            <div class=" w-full">
                <div class="w-full  py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">REGISTER</h1>
                        <p>Enter your information to register</p>
                    </div>
                    <div>
                        <form id="registrationForm" action="index.php?action=signUpSubmit" method="post">
                            <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <label for="userName" class="text-xs font-semibold px-1">User name</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="text" id="userName" name="userName"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="John" required>
                                    </div>
                                    <div id="userNameError" class="text-xs text-red-500 mt-1"></div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="email" class="text-xs font-semibold px-1">Email</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-email-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="email" id="email" name="email"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="johnsmith@example.com" required>
                                    </div>
                                    <div id="emailError" class="text-xs text-red-500 mt-1"></div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-12">
                                    <label for="password" class="text-xs font-semibold px-1">Password</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="password" id="password" name="password"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="************" required>
                                    </div>
                                    <div id="passwordError" class="text-xs text-red-500 mt-1"></div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-12">
                                    <label for="confirmPassword" class="text-xs font-semibold px-1">Confirm
                                        Password</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="password" id="confirmPassword" name="confirmPassword"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="************" required>
                                    </div>
                                    <div id="confirmPasswordError" class="text-xs text-red-500 mt-1"></div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <button type="submit" name="register"
                                        class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER
                                        NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
            var confirmPasswordInput = document.getElementById('confirmPassword');

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

            confirmPasswordInput.addEventListener('input', function () {
                clearError('confirmPassword');
                if (confirmPasswordInput.value !== passwordInput.value) {
                    showError('confirmPassword', 'Les passwords doivent etre identiques.');
                }
            });
        });
    </script>

</body>

</html>

<?php
$content = ob_get_clean();

include_once 'layout.php';
?>