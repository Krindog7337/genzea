<?php
$score = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    if (isset($_POST['q1']) && $_POST['q1'] == 'b') $score++;
    if (isset($_POST['q2']) && $_POST['q2'] == 'c') $score++;
    if (isset($_POST['q3']) && $_POST['q3'] == 'a') $score++;
    if (isset($_POST['q4']) && $_POST['q4'] == 'c') $score++;
    if (isset($_POST['q5']) && $_POST['q5'] == 'c') $score++;
}

// If the quiz is submitted, add a class to the form
$formClass = $score !== null ? 'hidden' : '';
?>

<div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16">
  <section>
    <h1 class="text-3xl text-center mb-2 text-text"> Kuis 2</h1>
    <form id="quizForm" action="" method="post" class="<?php echo $score !== null ? 'hidden' : ''; ?>">
    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 1</h1>
            <p>Jenis anemia yang paling umum terjadi yaitu...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q1" value="a" />
                Anemia hemolitik
            </label><br>

            <label>
                <input type="radio" name="q1" value="b" />
                Anemia defisiensi besi
            </label><br>

            <label>
                <input type="radio" name="q1" value="c" />
                Anemia sel sabit
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 2</h1>
            <p>Jenis anemia yang disebabkan oleh kurangnya produksi sel darah merah adalah...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q2" value="a" />
                Anemia defisiensi besi
            </label><br>

            <label>
                <input type="radio" name="q2" value="b" />
                Anemia pernisiosa
            </label><br>

            <label>
                <input type="radio" name="q2" value="c" />
                Anemia aplastik
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 3</h1>
            <p>Terdapat beberapa jenis anemia hemolitik, salah satunya adalah...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q3" value="a" />
                Anemia sel sabit
            </label><br>

            <label>
                <input type="radio" name="q3" value="b" />
                Anemia megaloblastik
            </label><br>

            <label>
                <input type="radio" name="q3" value="c" />
                Anemia pernisiosa
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 4</h1>
            <p>Jenis anemia yang disebabkan oleh adanya kerusakan sel darah merah yang berlebihan adalah...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q4" value="a" />
                Anemia defisiensi besi
            </label><br>

            <label>
                <input type="radio" name="q4" value="b" />
                Anemia megaloblastik
            </label><br>

            <label>
                <input type="radio" name="q4" value="c" />
                Anemia hemolitik
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 5</h1>
            <p>Faktor yang dapat meningkatkan risiko terjadinya anemia sel sabit antara lain...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q5" value="a" />
                Konsumsi makanan yang minim zat besi
            </label><br>

            <label>
                <input type="radio" name="q5" value="b" />
                Kurang berolahraga
            </label><br>

            <label>
                <input type="radio" name="q5" value="c" />
                Keturunan/Genetik
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
        onclick="location.href = location.pathname + '?p=quiz2'">Ulangi Kuis</button>
      <button
        class="rounded-lg border border-secondary  px-4 py-3 text-sm font-bold text-text hover:bg-secondary/70 focus:bg-accent focus:outline-none ml-4"
        onclick="location.href = location.pathname + '?p=quiz'">Kembali ke menu</button>
    </div>
    <?php endif; ?>
  </section>
</div>