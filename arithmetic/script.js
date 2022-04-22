let history = 0;

function addChar(val) {
    document.form.txtVal.value = document.form.txtVal.value + val;
}

function compute() {
    document.form.txtVal.value = eval(document.form.txtVal.value);
    history = document.form.txtVal.value;
}

function deleteChar() {
    document.form.txtVal.value = document.form.txtVal.value.substring(0, document.form.txtVal.value.length - 1);
}

function showHistory() {
    document.form.txtVal.value = history;
}

function cube() {
    document.form.txtVal.value = document.form.txtVal.value * document.form.txtVal.value * document.form.txtVal.value;
    history = document.form.txtVal.value;
}

function square() {
    document.form.txtVal.value = document.form.txtVal.value * document.form.txtVal.value;
    history = document.form.txtVal.value;
}

function changeSign() {
    if (document.form.txtVal.value.substring(0, 1) == "-")
        document.form.txtVal.value = document.form.txtVal.value.substring(1, document.form.txtVal.value.length);
	else
        document.form.txtVal.value = "-" + document.form.txtVal.value;
}

