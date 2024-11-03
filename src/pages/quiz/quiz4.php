<?php
$score = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = 0;
    if (isset($_POST['q1']) && $_POST['q1'] == 'b') $score++;
    if (isset($_POST['q2']) && $_POST['q2'] == 'b') $score++;
    if (isset($_POST['q3']) && $_POST['q3'] == 'a') $score++;
    if (isset($_POST['q4']) && $_POST['q4'] == 'c') $score++;
    if (isset($_POST['q5']) && $_POST['q5'] == 'c') $score++;
}

// If the quiz is submitted, add a class to the form
$formClass = $score !== null ? 'hidden' : '';
?>

<div class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-16">
  <section>
    <h1 class="text-3xl text-center mb-2 text-text"> Kuis 4</h1>
    <form id="quizForm" action="" method="post" class="<?php echo $score !== null ? 'hidden' : ''; ?>">
    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 1</h1>
            <p>Anemia disebabkan oleh...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q1" value="a" />
                Kekurangan Vitamin E
            </label><br>
            <label>
                <input type="radio" name="q1" value="b" />
                Kekurangan sel darah merah
            </label><br>
            <label>
                <input type="radio" name="q1" value="c" />
                Kekurangan karbohidrat
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 2</h1>
            <p>Anemia pada ibu hamil dapat meningkatkan risiko...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q2" value="a" />
                Persalinan normal
            </label><br>
            <label>
                <input type="radio" name="q2" value="b" />
                Kelahiran prematur
            </label><br>
            <label>
                <input type="radio" name="q2" value="c" />
                Bayi lahir dengan berat badan normal
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 3</h1>
            <p>Anemia pada orang dewasa dapat disebabkan oleh penyakit...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q3" value="a" />
                Gagal ginjal
            </label><br>
            <label>
                <input type="radio" name="q3" value="b" />
                Diabetes melitus
            </label><br>
            <label>
                <input type="radio" name="q3" value="c" />
                Kanker kulit
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 4</h1>
            <p>Salah satu penyebab anemia yaitu...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q4" value="a" />
                Terlalu sering berolahraga
            </label><br>
            <label>
                <input type="radio" name="q4" value="b" />
                Kencing Manis
            </label><br>
            <label>
                <input type="radio" name="q4" value="c" />
                Kurang tidur
            </label>
        </div>
    </div>

    <div class="bg-accent/30 shadow-md rounded-xl p-4 mb-2 text-text/90">
        <div class="mb-2">
            <h1 class="text-xl">Soal 5</h1>
            <p>Pencegahan anemia dapat dilakukan dengan...</p>
        </div>
        <div>
            <label>
                <input type="radio" name="q5" value="a" />
                Mengurangi konsumsi makanan yang mengandung vitamin C
              </label><br>
              <label>
                <input type="radio" name="q5" value="b" />
                Mengurangi konsumsi makanan yang mengandung zat besi
              </label><br>
              <label>
                <input type="radio" name="q5" value="c" />
                Meningkatkan konsumsi makanan yang mengandung zat besi
            </label>
        </div>
    </div>

    <div>
    <button
            class="items-center rounded-lg border border-transparent bg-primary px-4 py-3 text-sm font-bold text-white hover:bg-secondary focus:bg-accent"
            type="submit">Kirim</button>
        <div id="scoreDisplay"></div>
    </div>
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
        onclick="location.href = location.pathname + '?p=quiz4'">Ulangi Kuis</button>
      <button
        class="rounded-lg border border-secondary  px-4 py-3 text-sm font-bold text-text hover:bg-secondary/70 focus:bg-accent focus:outline-none ml-4"
        onclick="location.href = location.pathname + '?p=quiz'">Kembali ke menu</button>
    </div>
    <?php endif; ?>
  </section>
</div>