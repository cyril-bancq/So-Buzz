<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../public/css/index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>So-Buzz</title>
</head>    
<body>
    <main>
        <div class="form_quizz">
            <form action="result.php" method="POST" id="quiz">
            <img class="so_img" src="../../public/image/sobuzz.png" alt="">
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>Berlin est la capitale de ?</h3>
                            <div>
                                <input class="form-check-input" type="radio" name="question-1" id="q-1-1-A" value="A" />
                                <label for="question-1-answers-A">L'Italie </label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-1" id="q-1-2-B" value="B" />
                                <label for="question-1-answers-B">La France</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-1" id="q-1-3-C" value="C" />
                                <label for="question-1-answers-C">L'Allemagne</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-1" id="q-1-4-D" value="D" />
                                <label for="question-1-answers-D">L'Espagne</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>Combien font 4+8 ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-2" id="q-1-1-A" value="A" />
                                <label for="question-2-answers-A">10</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-2" id="q-1-2-B" value="B" />
                                <label for="question-2-answers-B">11</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-2" id="q-1-3-C" value="C" />
                                <label for="question-2-answers-C">12</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-2" id="q-1-4-D" value="D" />
                                <label for="question-2-answers-D">13</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>On dit qui vole un oeuf vole un ... ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-3" id="q-1-1-A" value="A" />
                                <label for="question-3-answers-A">Vélo</label>
                            </div>
                            <div>   
                                <input class="form-check-input"type="radio" name="question-3" id="q-1-2-B" value="B" />
                                <label for="question-3-answers-B">Arbre</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-3" id="q-1-3-C" value="C" />
                                <label for="question-3-answers-C">Boeuf</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-3" id="q-1-4-D" value="D" />
                                <label for="question-3-answers-D">Steak</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>Qui a gagné la Coupe du Monde 2018 ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-4" id="q-1-1-A" value="A" />
                                <label for="question-4-answers-A">Belgique </label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-4" id="q-1-2-B" value="B" />
                                <label for="question-4-answers-B">France</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-4" id="q-1-3-C" value="C" />
                                <label for="question-4-answers-C">Espagne</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-4" id="q-1-4-D" value="D" />
                                <label for="question-4-answers-D">Italie</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>Que représente le logo de So-Buzz ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-5" id="q-1-1-A" value="A" />
                                <label for="question-5-answers-A">Ours </label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-5" id="q-1-2-B" value="B" />
                                <label for="question-5-answers-B">Lapin</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-5" id="q-1-3-C" value="C" />
                                <label for="question-5-answers-C">Abeille</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-5" id="q-1-4-D" value="D" />
                                <label for="question-5-answers-D">Canard</label>
                            </div>
                        </li>
                    </ul>
                </div> 
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>Comment s'écrit le nombre 19 en chiffres romain ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-6" id="q-1-1-A" value="A" />
                                <label for="question-6-answers-A">XVIII </label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-6" id="q-1-2-B" value="B" />
                                <label for="question-6-answers-B">XIV</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-6" id="q-1-3-C" value="C" />
                                <label for="question-6-answers-C">XXI</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-6" id="q-1-4-D" value="D" />
                                <label for="question-6-answers-D">XIX</label>
                            </div>
                        </li>
                    </ul>
                </div> 
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>De quel couleur est le logo de Facebook ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-7" id="q-1-1-A" value="A" />
                                <label for="question-7-answers-A">Bleu</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-7" id="q-1-2-B" value="B" />
                                <label for="question-7-answers-B">Vert</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-7" id="q-1-3-C" value="C" />
                                <label for="question-7-answers-C">Rouge</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-7" id="q-1-4-D" value="D" />
                                <label for="question-7-answers-D">Noir</label>
                            </div>
                        </li>
                    </ul>
                </div> 
                <div class="quizz_question">
                    <ul>
                        <li>
                        <h3>La dernière lettre de l'Alphabet ?</h3>
                            <div>
                                <input class="form-check-input"type="radio" name="question-8" id="q-1-1-A" value="A" />
                                <label for="question-8-answers-A">A </label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-8" id="q-1-2-B" value="B" />
                                <label for="question-8-answers-B">B</label>
                            </div>
                            <div>
                                <input class="form-check-input"type="radio" name="question-8" id="q-1-3-C" value="C" />
                                <label for="question-8-answers-C">C</label>
                            </div>
                            <div>
                                <input class="form-check-input" type="radio" name="question-8" id="q-1-4-D" value="D" />
                                <label for="question-8-answers-D">Z</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <button type="sumbit" class="btn btn-primary btn-lg w-100">Envoyer le Quiz</button>  
            </form>
        </div>
        <a href=""></a>
    </main>
</body>
</html>