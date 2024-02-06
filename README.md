# Javascript-PHP-HiddenFunctions

<!---Esses são exemplos. Veja https://shields.io para outras pessoas ou para personalizar este conjunto de escudos. Você pode querer incluir dependências, status do projeto e informações de licença aqui--->

![GitHub repo size](https://img.shields.io/github/repo-size/piroposantosdev/Javascript-PHP-HiddenFunctions?style=for-the-badge)
![GitHub language count](https://img.shields.io/github/languages/count/piroposantosdev/Javascript-PHP-HiddenFunctions?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/piroposantosdev/Javascript-PHP-HiddenFunctions?style=for-the-badge)
![Bitbucket open issues](https://img.shields.io/bitbucket/issues/piroposantosdev/Javascript-PHP-HiddenFunctions?style=for-the-badge)
![Bitbucket open pull requests](https://img.shields.io/bitbucket/pr-raw/piroposantosdev/Javascript-PHP-HiddenFunctions?style=for-the-badge)

## 🚀 How to use Javascript-PHP-HiddenFunctions

> This is a simple HTML + Javascript + PHP configuration to make your JS functions more hidden, in order to make it a little more difficult to access script folders, etc. <br>
> This script was created because many customers generally use simple hosting (Apache) on their domains, which often does not allow them to install a NodeJs or ReactJs server, so I developed this script to try to make access a little more difficult. to the website source. <br>
> Basically what this script does is convert the javascript function to a Base64 string and then return it as a response to an AJAX or XMLHttpRequest communication.<br>
> In this script too, on the backend side it forces checking whether the PHP file is being accessed via a direct URL or whether it is being requested by some script on the domain.<br>
>Another thing added is checking whether the HTTP_REFERER comes from the same server to avoid requests from outside the domain.<br>
>
> And the last information is that it is passing the javascript function that comes from PHP through Headers, more specifically <br><br>
```header('data:'. $jsCode);``` 
> <br><br>and in the page's Javascript, just use<br><br>
```var content = xhr.getResponseHeader('data');``` 
><br>
```eval(eval(content));```
> <br><br>If you have any question or suggestion, please submit 😀

## 🤝 Collaborators

Agradecemos às seguintes pessoas que contribuíram para este projeto:

<table>
  <tr>
    <td align="center">
      <a href="#">
        <img src="https://avatars.githubusercontent.com/u/110497491?s=100&v=44" width="100px;" alt="Foto do Iuri Silva no GitHub"/><br>
        <sub>
          <b>Decco Piropo</b>
        </sub>
      </a>
    </td>    
  </tr>
</table>

## 📝 License

This design is free to use.

[⬆ Voltar ao topo](#readme)<br>
