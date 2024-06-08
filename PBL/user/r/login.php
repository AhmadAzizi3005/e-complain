<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0"
    />
    <link
      href="dist/output.css"
      ``
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>E-Complaint</title>
  </head>
  <body>
    <section class="bg-white min-h-screen flex items-center justify-center">
      <!-- login -->
      <div class="bg-blue-950 flex rounded-2xl shadow-lg max-w-3xl p-5 items-center">
        <!-- form -->
        <div class="md:w-1/2 px-16">
          <a
            href="index.php"
            onclick="window.history.back()"
            class="mb-4 bg-yellow-500 hover:bg-yellow-400 text-white font-bold py-2 px-3 flex rounded-full max-w-[80px] text-center justify-center text-sm"
          >
            Kembali
          </a>
          <h2 class="font-bold text-3xl text-center pt-2 text-white">Selamat Datang</h2>
          <p class="font-semibold text-center mt-2 text-white">Di E-Complaint</p>

         
            <?php if(!empty($_GET['gagal'])){?>
            <?php if($_GET['gagal']=="emailkosong"){?>
            <span style="color:red">
            Maaf email Tidak Boleh Kosong
            </span>
            <?php } else if($_GET['gagal']=="passkosong"){?>
            <span style="color:red">
            Maaf Password Tidak Boleh Kosong
            </span>
            <?php } else {?>
            <span style="color:red">
            Maaf Email dan Password Anda Salah
            </span>
            <?php }?>
            <?php }?>
         
        
          <form
            action="konfirmasilogin.php"
            method="post"
            class="flex flex-col gap-4"
          >
            <input
              class="p-2 mt-8 rounded-xl border"
              type="text"
              name="email"
              placeholder="Email"
            />

            <div class="relative">
              <input
                id="password-input"
                class="p-2 rounded-xl border w-full"
                type="password"
                name="password"
                placeholder="Kata Sandi"
              />
              <svg
                id="toggle-password"
                xmlns="http://www.w3.org/2000/svg"
                width="16"
                height="16"
                fill="grey"
                class="bi bi-eye-fill absolute top-1/2 right-3 -translate-y-1/2 cursor-pointer"
                viewBox="0 0 16 16"
              >
                <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
              </svg>
            </div>
            <button type="submit"  name="login" value="login" class="bg-orange-500 rounded-lg text-white py-2 hover:scale-105 duration-300 mt-4 w-full">Masuk</a>
            </button>
          </form>
        </div>

        <!-- image -->
        <div class="w-1/2">
          <img
            class="md:block hidden rounded-2xl"
            src="img/ic_4.png"
            alt="logo"
          />
        </div>
      </div>
    </section>
    <script>
      const passwordInput = document.getElementById("password-input");
      const togglePassword = document.getElementById("toggle-password");

      togglePassword.addEventListener("click", function () {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);
      });
    </script>
  </body>
</html>
