<?php
$score = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    if (isset($_POST['q1']) && $_POST['q1'] == 'a') $score++;
    if (isset($_POST['q2']) && $_POST['q2'] == 'c') $score++;
    if (isset($_POST['q3']) && $_POST['q3'] == 'b') $score++;
    if (isset($_POST['q4']) && $_POST['q4'] == 'c') $score++;
    if (isset($_POST['q5']) && $_POST['q5'] == 'a') $score++;
}

// If the quiz is submitted, add a class to the form
$formClass = $score !== null ? 'hidden' : '';
?>

<div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16">
  <section>
    <h1 class="text-3xl text-center mb-2 text-text"> Kuis 3</h1>
    <form id="quizForm" action="" method="post" class="<?php echo $score !== null ? 'hidden' : ''; ?>">
      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
          <div class="mb-2">
              <h1 class="text-xl">Soal 1</h1>
              <p>Anemia pada bayi dan anak-anak dapat disebabkan oleh kekurangan...</p>
          </div>
          <div>
              <label>
                  <input type="radio" name="q1" value="a" />
                  Zat Besi
              </label><br>
              <label>
                  <input type="radio" name="q1" value="b" />
                  Vitamin A
              </label><br>
              <label>
                  <input type="radio" name="q1" value="c" />
                  Lemak
              </label>
          </div>
      </div>
  
      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
          <div class="mb-2">
              <h1 class="text-xl">Soal 2</h1>
              <p>Konsumsi makanan yang mengandung zat besi dapat membantu mencegah terjadinya...</p>
          </div>
          <div>
              <label>
                  <input type="radio" name="q2" value="a" />
                  Anemia sel sabit
              </label><br>
              <label>
                  <input type="radio" name="q2" value="b" />
                  Anemia aplastik
              </label><br>
              <label>
                  <input type="radio" name="q2" value="c" />
                  Anemia defisiensi besi
              </label>
          </div>
      </div>
  
      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
          <div class="mb-2">
              <h1 class="text-xl">Soal 3</h1>
              <p>Contoh makanan non-hewan yang kaya zat besi yaitu...</p>
          </div>
          <div>
              <label>
                  <input type="radio" name="q3" value="a" />
                  Daging merah, brokoli
              </label><br>
              <label>
                  <input type="radio" name="q3" value="b" />
                  Bayam, brokoli
              </label><br>
              <label>
                  <input type="radio" name="q3" value="c" />
                  Tahu, Tuna
              </label>
          </div>
      </div>
  
      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
          <div class="mb-2">
              <h1 class="text-xl">Soal 4</h1>
              <p>Makanan yang harus dihindari penderita anemia yaitu makanan yang mengandung...</p>
          </div>
          <div>
              <label>
                  <input type="radio" name="q4" value="a" />
                  Zat Besi
              </label><br>
              <label>
                  <input type="radio" name="q4" value="b" />
                  Asam Folat
              </label><br>
              <label>
                  <input type="radio" name="q4" value="c" />
                  Kafein
              </label>
          </div>
      </div>
  
      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
          <div class="mb-2">
              <h1 class="text-xl">Soal 5</h1>
              <p>Contoh makanan/minuman yang tidak mengandung kafein yaitu...</p>
          </div>
          <div>
              <label>
                  <input type="radio" name="q5" value="a" />
                  Ayam, ikan
              </label><br>
              <label>
                  <input type="radio" name="q5" value="b" />
                  Teh, kacang hijau
              </label><br>
              <label>
                  <input type="radio" name="q5" value="c" />
                  Kopi, teh
              </label>
          </div>
      </div>
  
      <button
            class="items-center rounded-lg border border-transparent bg-primary px-4 py-3 text-sm font-bold text-white hover:bg-secondary focus:bg-accent"
            type="submit">Kirim</button>
  </form>
  

    <?php if ($score !== null): ?>
    <!-- Score and Reset Button displayed only after quiz submission -->
    <div class="text-center">
    <h2 class="text-2xl text-text">Nilai anda adalah:
        <?php echo $score; ?>/5
      </h2>
      <div class="flex gap-2"></div>
      <button
        class="items-center rounded-lg border border-transparent bg-primary px-4 py-3 text-sm font-bold text-background hover:bg-secondary focus:bg-accent"
        onclick="location.href = location.pathname + '?p=quiz3'">Ulangi Kuis</button>
      <button
        class="rounded-lg border border-secondary  px-4 py-3 text-sm font-bold text-text hover:bg-secondary/70 focus:bg-accent focus:outline-none ml-4"
        onclick="location.href = location.pathname + '?p=quiz'">Kembali ke menu</button>
    </div>
    <?php endif; ?>
  </section>
</div>