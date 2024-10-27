<?php
$score = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    if (isset($_POST['q1']) && $_POST['q1'] == 'a') $score++;
    if (isset($_POST['q2']) && $_POST['q2'] == 'a') $score++;
    if (isset($_POST['q3']) && $_POST['q3'] == 'c') $score++;
    if (isset($_POST['q4']) && $_POST['q4'] == 'b') $score++;
    if (isset($_POST['q5']) && $_POST['q5'] == 'c') $score++;
}

// If the quiz is submitted, add a class to the form
$formClass = $score !== null ? 'hidden' : '';
?>

<div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16">
  <section>
    <h1 class="text-3xl text-center mb-2 text-text"> Kuis 1</h1>
    <form id="quizForm" action="" method="post" class="<?php echo $score !== null ? 'hidden' : ''; ?>">
      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
          <h1 class="text-xl">Soal 1</h1>
          <p>Gejala anemia yang umum meliputi...</p>
        </div>
        <div>
          <label>
            <input type="radio" name="q1" value="a" />
            Sakit kepala dan pusing
          </label><br>

          <label>
            <input type="radio" name="q1" value="b" />
            Sesak napas dan detak jantung normal
          </label><br>

          <label>
            <input type="radio" name="q1" value="c" />
            Suhu tubuh yang naik
          </label>
        </div>
      </div>

      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
          <h1 class="text-xl">Soal 2</h1>
          <p>Salah satu cara untuk mendiagnosis anemia adalah dengan melakukan...</p>
        </div>
        <div>
          <label>
            <input type="radio" name="q2" value="a" />
            Tes darah lengkap
          </label><br>

          <label>
            <input type="radio" name="q2" value="b" />
            Tes urin
          </label><br>

          <label>
            <input type="radio" name="q2" value="c" />
            Tes penglihatan
          </label>
        </div>
      </div>

      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
          <h1 class="text-xl">Soal 3</h1>
          <p>Gejala anemia pernisiosa dapat meliputi...</p>
        </div>
        <div>
          <label>
            <input type="radio" name="q3" value="a" />
            Sakit Leher
          </label><br>

          <label>
            <input type="radio" name="q3" value="b" />
            Kulit menguning
          </label><br>

          <label>
            <input type="radio" name="q3" value="c" />
            Kelelahan dan lemah
          </label>
        </div>
      </div>

      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
          <h1 class="text-xl">Soal 4</h1>
          <p>Pada anemia defisiensi besi, sel darah merah akan terlihat...</p>
        </div>
        <div>
          <label>
            <input type="radio" name="q4" value="a" />
            Lebih besar dari normal
          </label><br>

          <label>
            <input type="radio" name="q4" value="b" />
            Lebih kecil dari normal
          </label><br>

          <label>
            <input type="radio" name="q4" value="c" />
            Tidak berubah ukuran
          </label>
        </div>
      </div>

      <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
          <h1 class="text-xl">Soal 5</h1>
          <p>Urin berwarna gelap merupakan gejala dari...</p>
        </div>
        <div>
          <label>
            <input type="radio" name="q5" value="a" />
            Anemia defisiensi besi
          </label><br>

          <label>
            <input type="radio" name="q5" value="b" />
            Anemia aplastik
          </label><br>

          <label>
            <input type="radio" name="q5" value="c" />
            Anemia hemolitik
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
        onclick="location.href = location.pathname + '?p=quiz1'">Ulangi Kuis</button>
      <button
        class="rounded-lg border border-secondary  px-4 py-3 text-sm font-bold text-text hover:bg-secondary/70 focus:bg-accent focus:outline-none ml-4"
        onclick="location.href = location.pathname + '?p=quiz'">Kembali ke menu</button>
    </div>
    <?php endif; ?>
  </section>
</div>