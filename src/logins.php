
<?php include("Login.php") ;

// if (isset($_GET['alert']) && $_GET['alert'] === "wrong") {
//   echo "<script>alert('password salah');</script>";
// }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="stylesheet" href="./output.css" />
  </head>
  <body class="bg-primary">
    <section class="min-h-screen">
      <h1 class="uppercase text-white font-bold text-5xl text-center pt-16">
        Login
      </h1>

      <div
        class="max-w-xl w-full h-96 bg-nav mx-auto py-16 flex items-center mt-24 rounded-xl"
      >
        <!-- Input -->
        <div class="max-w-md w-full space-y-3 mx-auto">
          <form action="Login.php" method="post">
            <div class="relative mb-10">
              <input
                type="Email"
                class="peer py-6 px-4 ps-12 block w-full bg-gray-100 border-transparent rounded-full text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                placeholder="Email"
                name="Email"
              />
              <div
                class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none"
              >
                <svg
                  class="flex-shrink-0 size-7 text-gray-500 dark:text-neutral-500"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                  <circle cx="12" cy="7" r="4"></circle>
                </svg>
              </div>
            </div>

            <div class="relative">
              <input
                type="password"
                class="peer py-6 px-4 ps-12 block w-full bg-gray-100 border-transparent rounded-full text-xl focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                placeholder="Password"
                name="password"
              />
              <div
                class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none"
              >
                <svg
                  class="flex-shrink-0 size-7 text-gray-500 dark:text-neutral-500"
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                >
                  <path
                    d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"
                  ></path>
                  <circle cx="16.5" cy="7.5" r=".5"></circle>
                </svg>
              </div>
            </div>
            <div class="flex justify-center pt-5">
              <button
                class="bg-primary py-3 px-12 font-bold rounded-full text-white"
                type="submit"
                name="submit"
              >
                LOGIN 
              </button>
            </div>
          </form>
          <p class="italic underline text-center font-light">
            <a href="Registrasi.html">Don't Have account?</a>
          </p>
        </div>
        <!-- End Input -->
      </div>
    </section>
  </body>
</html>
