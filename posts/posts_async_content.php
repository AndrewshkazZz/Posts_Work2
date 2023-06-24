<form>
    <textarea name="post" rows="10" cols="60" maxlength="300" placeholder="Напишите объявление"></textarea>
</form>
<button onclick="read()">Получить данные</button>
<button onclick="send()">Отправить данные</button>
<div id="textFromServer"></div>
<script>
    async function read()
    {
        let response = await fetch("get_post.php");
        if (response.ok)
        {
            let answer = await response.text();
            console.log("ответ" + answer);
            textFromServer.innerHTML = answer;
        }
        else
        {
            console.log("Ошибка HTTP:" + response.status);
        }
    }
    async function send()
    {
        let response = await fetch("add_post.php", {
            method: 'POST', 
            body: new FormData(document.forms[0])
        } );
        if (response.ok)
        {
            let answer = await response.text();
            console.log(answer);
            textFromServer.innerHTML = answer;
            read();
        }
        else
        {
            console.log("Ошибка HTTP:" + response.status);
        }
    }
</script>