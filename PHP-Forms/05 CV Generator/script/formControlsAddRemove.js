var progLangID = 0;
var langID = 0;
var parentProgramming = document.getElementById('programming');
var parrentLanguage = document.getElementById('languages');

document.getElementById('addProgLang').addEventListener('click', function () {
    if (progLangID < 20) {
        progLangID++;
        var textInput = document.createElement('input');
        textInput.type='text';
        textInput.placeholder = 'Language';
        textInput.id = 'progLang' + progLangID;
        textInput.name = 'programmingLang[]';
        var selectInput = document.createElement('select');
        selectInput.name = 'programmingLevel[]';
        selectInput.id = 'progLvl' + progLangID;
        var selectOption1 = document.createElement('option');
        var selectOption2 = document.createElement('option');
        var selectOption3 = document.createElement('option');
        selectOption1.text = 'Beginner';
        selectOption1.value = 'Beginner';
        selectOption2.text = 'Middle';
        selectOption2.value = 'Middle';
        selectOption3.text = 'Advanced';
        selectOption3.value = 'Advanced';
        selectInput.appendChild(selectOption1);
        selectInput.appendChild(selectOption2);
        selectInput.appendChild(selectOption3);
        parentProgramming.appendChild(textInput);
        parentProgramming.appendChild(selectInput);
    }
});

document.getElementById('removeProgLang').addEventListener('click', function() {
   if (progLangID > 0) {
       var textID = document.getElementById('progLang' + progLangID);
       var selectID = document.getElementById('progLvl' + progLangID);
       parentProgramming.removeChild(textID);
       parentProgramming.removeChild(selectID);
       progLangID--;
   }
});

document.getElementById('addLang').addEventListener('click',function() {
    if (langID < 20) {
        langID++;
        var textInput = document.createElement('input');
        textInput.type='text';
        textInput.placeholder = 'Language';
        textInput.id = 'lang' + langID;
        textInput.name = 'language[]';
        var langComprehension = document.createElement('select');
        langComprehension.name = 'langComprehension[]';
        langComprehension.id = 'langComp' + langID;
        langComprehension.className = 'generateByJS';
        var langComprehensionOpt1 = document.createElement('option');
        langComprehensionOpt1.text = '-Comprehension-';
        langComprehensionOpt1.value = 'disabled';
        langComprehensionOpt1.disabled = 'disabled';
        langComprehensionOpt1.selected = 'selected';
        var langComprehensionOpt2 = document.createElement('option');
        langComprehensionOpt2.text = 'Beginner';
        langComprehensionOpt2.value = 'Beginner';
        var langComprehensionOpt3 = document.createElement('option');
        langComprehensionOpt3.text = 'Intermediate';
        langComprehensionOpt3.value = 'Intermediate';
        var langComprehensionOpt4 = document.createElement('option');
        langComprehensionOpt4.text = 'Advanced';
        langComprehensionOpt4.value = 'Advanced';
        //
        var langReading = document.createElement('select');
        langReading.name = 'langReading[]';
        langReading.id = 'langRead' + langID;
        langReading.className = 'generateByJS';
        var langReadingOpt1 = document.createElement('option');
        langReadingOpt1.text = '-Reading-';
        langReadingOpt1.value = 'disabled';
        langReadingOpt1.disabled = 'disabled';
        langReadingOpt1.selected = 'selected';
        var langReadingOpt2 = document.createElement('option');
        langReadingOpt2.text = 'Beginner';
        langReadingOpt2.value = 'Beginner';
        var langReadingOpt3 = document.createElement('option');
        langReadingOpt3.text = 'Intermediate';
        langReadingOpt3.value = 'Intermediate';
        var langReadingOpt4 = document.createElement('option');
        langReadingOpt4.text = 'Advanced';
        langReadingOpt4.value = 'Advanced';
        var langWriting = document.createElement('select');
        langWriting.name = 'langWriting[]';
        langWriting.id = 'langWrite' + langID;
        var langWritingOpt1 = document.createElement('option');
        langWritingOpt1.text = '-Writing-';
        langWritingOpt1.value = 'disabled';
        langWritingOpt1.disabled = 'disabled';
        langWritingOpt1.selected = 'selected';
        var langWritingOpt2 = document.createElement('option');
        langWritingOpt2.text = 'Beginner';
        langWritingOpt2.value = 'Beginner';
        var langWritingOpt3 = document.createElement('option');
        langWritingOpt3.text = 'Intermediate';
        langWritingOpt3.value = 'Intermediate';
        var langWritingOpt4 = document.createElement('option');
        langWritingOpt4.text = 'Advanced';
        langWritingOpt4.value = 'Advanced';

        parrentLanguage.appendChild(textInput);
        langComprehension.appendChild(langComprehensionOpt1);
        langComprehension.appendChild(langComprehensionOpt2);
        langComprehension.appendChild(langComprehensionOpt3);
        langComprehension.appendChild(langComprehensionOpt4);
        parrentLanguage.appendChild(langComprehension);
        langReading.appendChild(langReadingOpt1);
        langReading.appendChild(langReadingOpt2);
        langReading.appendChild(langReadingOpt3);
        langReading.appendChild(langReadingOpt4);
        parrentLanguage.appendChild(langReading);
        langWriting.appendChild(langWritingOpt1);
        langWriting.appendChild(langWritingOpt2);
        langWriting.appendChild(langWritingOpt3);
        langWriting.appendChild(langWritingOpt4);
        parrentLanguage.appendChild(langWriting);
    }
});

document.getElementById('removeLang').addEventListener('click', function() {
    if (langID > 0) {
        var textID = document.getElementById('lang' + langID);
        var langComprehensionID = document.getElementById('langComp' + langID);
        var langReadingID = document.getElementById('langRead' + langID);
        var langWritingID = document.getElementById('langWrite' + langID);
        parrentLanguage.removeChild(textID);
        parrentLanguage.removeChild(langComprehensionID);
        parrentLanguage.removeChild(langReadingID);
        parrentLanguage.removeChild(langWritingID);
        langID--;
    }
});