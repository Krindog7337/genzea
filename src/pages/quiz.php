
      <div class="container py-8">
        <section class="mx-auto flex flex-col md:max-w-xl">
          <form id="form-kuis" class="flex flex-col gap-2">
            <div class="wrapper-quiz-card rounded-lg bg-ceria-cream p-2">
              <div class="wrapper-question px-2 py-1">
                <h1>Soal 1</h1>
                <p>Gejala anemia yang umum meliputi...</p>
              </div>
              <div class="wrapper-quiz-answer">
                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q1" value="a" />
                  <span class="ml-2">Sakit kepala dan pusing</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q1" value="b" />
                  <span class="ml-2">Sesak napas dan jantung berdebar</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q1" value="c" />
                  <span class="ml-2">Suhu tubuh yang naik</span>
                </label>
              </div>
            </div>
            <div class="wrapper-quiz-card rounded-lg bg-ceria-cream p-2">
              <div class="wrapper-question px-2 py-1">
                <h1>Soal 2</h1>
                <p>
                  Salah satu cara untuk mendiagnosis anemia adalah dengan
                  melakukan...
                </p>
              </div>
              <div class="wrapper-quiz-answer">
                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q2" value="a" />
                  <span class="ml-2">Tes darah lengkap</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q2" value="b" />
                  <span class="ml-2">Tes urin</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q2" value="c" />
                  <span class="ml-2">Tes penglihatan</span>
                </label>
              </div>
            </div>
            <div class="wrapper-quiz-card rounded-lg bg-ceria-cream p-2">
              <div class="wrapper-question px-2 py-1">
                <h1>Soal 3</h1>
                <p>Gejala anemia pernisiosa dapat meliputi...</p>
              </div>
              <div class="wrapper-quiz-answer">
                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q3" value="a" />
                  <span class="ml-2">Kelelahan dan lemah</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q3" value="b" />
                  <span class="ml-2">Kulit pucat</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q3" value="c" />
                  <span class="ml-2">Semua jawaban benar</span>
                </label>
              </div>
            </div>
            <div class="wrapper-quiz-card rounded-lg bg-ceria-cream p-2">
              <div class="wrapper-question px-2 py-1">
                <h1>Soal 4</h1>
                <p>
                  Pada anemia defisiensi besi, sel darah merah akan terlihat...
                </p>
              </div>
              <div class="wrapper-quiz-answer">
                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q4" value="a" />
                  <span class="ml-2">Lebih besar dari normal</span>
                </label>
                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q4" value="b" />
                  <span class="ml-2">Lebih kecil dari normal</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q4" value="c" />
                  <span class="ml-2">tidak berubah ukuran</span>
                </label>
              </div>
            </div>
            <div class="wrapper-quiz-card rounded-lg bg-ceria-cream p-2">
              <div class="wrapper-question px-2 py-1">
                <h1>Soal 5</h1>
                <p>Urin berwarna gelap merupakan gejala dari...</p>
              </div>
              <div class="wrapper-quiz-answer">
                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q5" value="a" />
                  <span class="ml-2">Anemia defisiensi besi</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q5" value="b" />
                  <span class="ml-2">Anemia aplastik</span>
                </label>

                <label class="flex items-center">
                  <input type="radio" class="form-radio" name="q5" value="c" />
                  <span class="ml-2">Anemia hemolitik</span>
                </label>
              </div>
            </div>
            <div class="wrapper my-4 flex flex-row-reverse justify-between">
              <button
                class="cursor-pointer rounded-lg bg-primary px-4 py-2 text-center text-background shadow-lg"
                type="submit"
              >
                Lihat Hasil
              </button>
              <div
                class="flex flex-col justify-center border-l-2 border-ceria-accent px-4"
                id="scoreDisplay"
              ></div>
            </div>
          </form>
        </section>
      </div>

   
    <script src="/public/script/kuis-gena.js"></script>
  </body>
</html>
