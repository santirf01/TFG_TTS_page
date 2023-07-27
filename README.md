# TFG : 

<!DOCTYPE html>
<html>
<head>
    <title> Estudio de la síntesis de voz mediante técnicas de aprendizaje profundo para la creación de voces sanas y patológicas </title>
    <style>
        /* Estilos para centrar el título */
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh; /* Esto asegura que la cabecera ocupe toda la altura de la ventana del navegador */
        }
        h1 {
            margin-top: 20px; /* Espacio entre la imagen y el título */
        }
    </style>
</head>
<body>
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAi0AAABaCAMAAABDj5YQAAAAw1BMVEX////ufQAdHRsAAADuegDtdwDtcwDtdQDueQD3xqPT09PyoGYREQ70sX9mZmUEBACTk5J2dnX29vXKysqoqKh8fHvc3NwjIyDn5+b98OQSEg/++vUYGBb749H98+r86dv51r34zK32wZvyoF763MfzqXHwii31uIttbWzwjzr0rXe1tbX0s4LxlUf2vpVTU1LynVm/v7/vgxf40LQzMzGdnZxKSkmHh4Y9PTxcXFvxlEaXl5bwjDIsLCvxmFFFRUTsaQC1ilHnAAASEUlEQVR4nO2da1fbOhOFHZzYoVzSGy2QAAFCKLQFml6gN9r//6teEnKxpWekkaz2vGuds7+0a+HIsmd7tjQajbLsP2TZ4Wh9a+PbpDXF+P3Z+fFB/5/u0r8Zh3sW/l/ssbd+2irKTrfdbj2i3e50imJy9jGsh7s2nqfr5e6Lt5+fPn36/eWHV+G/vX0aDOE+77ZsrAd2Z3Rpt3F5UL3ipjDx+6T692NqIbAXfWhj68T9m72rSVEuaFJHtywu1gMI8ya3cBv4BAJ2X27Pmuv1erN/P92+CPr9k+kvAzG9z5fPu2ZTZ2XHRLcMfJx7aKPYq16xYVmkU6Pkx8JqoVOMwnpxTG042TL8VnSYKnMvUxanB64Gqni2uWag9zTsARhvf+X5fq3dwYMtdwJczJPc7JkO+3l+bfByWNpvKdBO/QJe9Lh2iY8tGTTRPQvqRXYPhq9zto71VuGiyvw5ivFQd/s/w5aXeT4gS/bybevDlxDLlhlhrmu36QNbAu10TE2c1y7xsuUGDNcJ6gVxtjWRO92CXgt8UX08f4Itu3eyoTfzl8pWGrBlypfabZrbCT/qugf3suVjYxen4OwKB2PilsiX+0P//f8AW14YEmQgf6NrphFbjNugnYYBz4Qfdbd+jZct1EiYi1NwdolLhQbV+eIZLWd/gi0vfFbOt1XtNGTLWn69agvttBHwUPhRGxMaL1uy92A/g3JOIGfbeOnRpBPElSmKC597Sc6WXR6x1OyomnU1ZUuNLmSnkFkRSZnpnPxsWW8oRchZdE4ngY7lEe1ySI2tkJwtX60GwY6aqVFjtqzlz5aNkZ18r6YC/KhLI1DhZ8thQykiIcKn2AgYsdRQXDk7kJotuxobb2q0qDlb1lZDXbSTXopo3NO+MS7ysyX70cjFIWcLCK5dhKvQsjnnS0nNltueyoyKeXQCtlTuc9HITiRE5bFxkYItJ2BGvYtTcfaBVONuDE8W3bl39CA1W3Qm7ilGLinYsv9l0VojO1G8xv6oFWzZa+TiVJzN+q2YIUul0+/lHiRmy1uliXv+plKwZS3/MG+N7NQ+VT4VftQX5lUKtmTjBi6OhcicxvQnzcjy0GvZuyRmy7Uz1AJWlJGELYPXi+Ym9KqVC2oY3LOiExq2nINIaF2cjrMXTWRo3iFx4J2WLaox7hT7X71tJWHLWv523hza6aPqqfijtlZnNGw5IilSujgVZ0/jB7iVZ5NmRmnZ8lltYf84Nw1bBnfz5shOSimiRUljRXEKDVsyNI6qFyrOXvmmzu12t7tKc5EgBYHSsuWnNzK3ZMtnX1tp2LKK7eBbUUnRKYVg7dUZFVveRUsRCZG5onjgIku7Wxadi5uNs42bcVGUTsUyY0lzJGXLK72BB598jQlsGWwKEIi6fJytWCniGdGRdZ2KLaNoF6fhrMP+3WJ8PloNiQ+Hl61CJkz7G/YhKVs42LKJI19vPJfZMrjeYby5yzGKvKQl2smOVtggIWq17OtUbMlIBIQvuQYWojpnz0Tzl+W5Te+DM5kvBeYWJmULft/5s69EIm/IhdniSHjYfca/WGSO0vhPI0X0UXe27Ot0bCGLalwcClGds6IOddpCXmn/XOSLNTWfIiVbcPV56kNoXj0YeFoLZss0CYt+sUiki7QTCxEMA3VsGUa6OAVnhUhLuwBqL3B4KlAMZ2op2WK3NY+mYswu96TpRrAl2wEvthxPo51cce75z4gtlCagY0umigtbUHCWVk6nZp/YGlR7vi6TjPJmUrIFOTG17nP6y+aOu7UYtlAXVveJs9MGuCRcOFayhZyE38WhENWjwGz00uu3DnldyQ78JWXLB2TLLK6yTQPQ3N1cFFtgnD1YBgLRTtY6iwk00xAuVLJFuTbobdzk7Am6FpcKLXHDP7XVNiFb3khCJBHJHf2PYgvdaDlXRzs51tBmQCHCeJqSLeq8gxqwF8PqFehaCilpt44bmgHALDodW1BuFsZFKXIn6EaxBSM+iz9G2YmEiAMkSrZwTpNHipCztTx0liqNZ5niPU4YrQFPOrY4hIj9jkeKotiCC1XLv2K+pUeK6DWybbVsoXxJn4s79XKWEni6/jH8AjSfMhOPU7LlK0yTl/klEVKU3rewndxvlIUI/ZGWLZTH53Nx6DiqnKVlMAohSqCMDjuXIhlbnEIkSJEz4TLZuGXFlgg7UZBGIJiWLZzH53Rxfs7SEru0dwSxDu/GGswnYwvHVJYrzRSLWYVZCVFsodv8XP053E74UfMv1GyhPD63FOHgqcZZSN8J3I0J78YanyVjCwrRr+WfOc771tFgDFvIwQ0qG0XQThBXWIIiepI3UrMFvT5G2hfwcpaEqBNWbQObMK5JxRaPEEVIUQxbaHvK5mqfSLidUIgEeqnZwvmWDhfHnK12e93+DDq6yfMKkG1lalkqtniEKMt2QqUogi079JNeNZOG8i1LRykXinJK1+vZckUujnMEHlsmztauJ0uHlhqCRcmOkUSXii20cLjKuM8ipCiULbtvP/EvqjMvGgw67ERZDqIv0rMFJzAO62Kwpda2/ffQWh8ZuTxzNJWILV4hyjLyLa70XCEbatMuT7QA50PVcjrZTqIUhQhRAFswa0l2cX4hAoUNmhA9ApYljYFLIrZwrkBNZ2h92CVFiTItl4m5jwiTIgrN2cn+cwSwhfIt5dE2craWFzwC7yO1JgMCDEbebyK2eIVIsL5DilLl5X6vtRpkJxYiqRRTAFswb0l0cX7O2nO9oAoSC9hSVNZXFtOwRSFEWUa+xTErSsWW+uaCIDvhRy2WYgpgC0qRdLWCs5dWR/1r6wBvM2nYwjMiQ2Uwa1eWojRs2b82mqWlWklcaEZkThNWCGGLbZcHHv7ga/1CBFOiiGELrYwYaeJp2IJCZNqJpUhcK0q0++yJ0WyAnfijFjPRQtgSMtlCIapz1paQ4PnzFLbjNWZWSdiiEqIsew2TFjltIQlbNq1JV8BYhIjlqAkYwpaA8bOGs/YFoQVeZ7CnVu368MfOaotgi2JGNMVTlCKp0TS75u0tkXo70ZViTcBAtmDADUfbuO3D4GySKRElABkLqJ+s7z2CLYoZ0RSYTiBKUZL6LTDlQjvZ+1SDhSiMLbyqTFJEZDE5azWGD+SHzZY6gYEtwbW4lUIkSNEz+7oZErBln2ZcbCeQIhQixzcbxBbM4ScXp+Ls32KLbcCeJxffhmpGNEWQFCXxLbQhEu0EMx2aPTmEKIwtmFJONlYNnv6WEtls8aTLAlQzoilYioR9RSnYgrutlXbij9oxMQ1jC+bRgovTCBGMcsNqR8/hHeXaVREGv4S2JKiFiHRP3leUZpQL3VDaaQsroTjeQxhbMKXcdnE6zv6tGbRtv8Ga0JYEtRAJ9V0EKUpTG2rTblhpJxQiVw59GFsw9d92cbrBE0Tn3BsUGd7o3J39tTvzHwGYNceLy5iSbwXQHpEoOgfOhYosWUOBYCEKZQullNsuDjn7zmzLnmVHRf5td2o0A2MOwXoSUIjWXiN+0qXCJCxRbaifdstsJ+NjDBaiULaoXJySs7CqGJ7eolhVhI0+6lM+HiGUsRwg8EqWvtS1oVbgIx4UhXOoDscKgWzB3U3mmqVyFk9RAdetGf6MBcg6wSiFDNzjHGZQdGaJ2ELBRrKTIUW8Vu1cqgtli0aKdEKUKBsKOmQsINC407OdvQ4WosYGFdnSE1PnmLVGNpT0WkwpCheiYLbg7qZuTYrUnLVZZW809MKuK29mWpKO+Cqr1ID7vcKwKmpbBbOl9/QV48mHHT4XCQbtbKeaFBFX3EIUzJbsm9fFoRBR7RgYuGvKk9UAWaimPJNNxGA8obkQCSHX8Jz/518wVgw657VThBCFswXL89RcHPydOUs7RNzHgdiAvdZmUQ4OrQXMoZPE0Kgcasx+ojvwLrSy6JWiCCEKZ4vXxek5i1Wbm+8+s/Ie9IFYRAIh4rFFFFsontP7bl/HdqqMHokrztBcFsEW3Ghb5WQAZyP6awD8rV2EiGJrg331PXB/czCoMnfUPmjQRVxZQDutpChGiCLY4pMi5YxoCtw1HxLPPSbXYlUe+d7MuSQKisD9otgCg/Z9WiVlOy3pQDsDvBGMcLZ4pCiEs1iYXs7zs7uiK4HFh2ZqRy7eIzd1gNSpZPVbMHzkkSLiivBRrxDOFs9om6qHi5ylY9W0501kvDUb4sEcL1GdZZcJu5sjAOxMVRtqQLkTHKBbWCJKiGLY4pYi6qHIWR64a3fO3xAxScn4SCFnsYwVpOr6wWyxb5eKLahEwsudEyJKiGLY4nRxzFlxLIJ9VpzxPOs61gSmNGFMwf5r56ouTGqvWUexBZSRo0e8VjS3E21/9QpRDFtYiua8RM7KQxGhAqrGu5xqK6CKJ1ANNCdl6s7c1MCWoii2wEKGkG3lkCLeWu+dYMSwxeXiqH+OTM8+V+wvvGOXPh/xKmyy+sWn2w0UCwB8DIQX9CMr9T+KLZCcJ5yExBl0MzvRbNTxUS8QwxaHiwsUIsm5tDpjaeP2I0bC2VbCiVbiyZk5xLVq4N2Hu889oBva2cAxbMFVLx6BsZ1mS3H4zv1x9Bi2YAbdo4sLFKKMBbQ1PRXC0ff+mXAqhFgeXBx85D/d5bIphx/TtxU3tBa+I9jCqXnCAIySuWfJz5FCFMcW2cWR7d2cxdSpKcqWlEl31ZHOYRQrPsijj0H++rsjk44OxtNMpqjWsqV74Wx5wsIoXM37ikaqXeqIKLaILo5L/LhFhTbWzfnSvrKtf7RViGd2luJkypWiMujl+evrbUZwVdM5aHHJmrowWzZvXwh4eY3FoSjw9wiU+fbGj6ASPxVEsYUt3LnHgxqc5Tcf0HecrtkpLq4OVuuM/dH5xHVSnuNOt+6J8GB/H08ypNGx4ujeTChwaVwTXEmMB+vycZ98rhyP+Zz1SeeIYwv6EKEXrnqKM4haNGuzUxSt+9PLrcvTb+2iFI4l8j9vgvy3pXFUUT1aizSl6M/l5WperfGiHQUnl4hji3CsENvQm4Nw7j3ht9vtKE74HbpuIkToYoyjWmCi5SUz9T/xedAAvZlU+y0i2cJpCWhpxSEPGMIPhS+k9yXReo9OiLCqmLlRLPFZ8wCMq/Dr0yQWRbLFeYZzDapzo2l5MBAdX0AvlRYpl5f4AMT67CvNXkXXWZ9YmZugK/kXyRbp8Eywoqa1vro58Wl9B3wlSz1okulgpP7/sX3QK3Dumg0hrGkgli10+ABaUZfF3281o0vXM/GaAbcoh0IrRFkGG9GMbYVJaizATsUKcJWGoHqkWLbgQjRAu0OoP2kyduloBvTeabQKWiHiiGB9+pKkfotnk66OLcrs+Vi2cFTZgr6AT58PYVWhUBxNPQOeqRBoHfVmAeJCPTSSgC25rygaZ6dZb1ARbMkasEU3zg3ZB3+jDw4Yj+rNy1iisRjphSjL1kCKarV5mrNlUwzjLqAa52rzFaPZopvHBNXv8cZdEO3Cey51BR+EeKgWeiHiFclaSk1jtuz/9Hs6jufWoU2dj2eLJk5Yhm0mG7XD1aj05DaY2L1rZKKQXWsoRS89F4Rgc03TG/8EQp3bGs+W7Mw7gAouO9jfKMLmRm31g67wMo9PhwsRIlzArq0ANmRL/klF3b3S804L9fEKDdiScfpaxZSt8Mpgo4l2yjd7zouYalLPb6P5EiJEghRVLNyILYNcW2txr+V02YW+VEETtmT3TjEqxzFl5LL1tpYvxWQYc4NsxhehuoWPLUElyKjAZZVvDdgyyPfdaVxV9N/Lhur4zoCvohFbHsalopNrF2F7VCu46vp856z9SUzdsSU+bOd5L3TzR5gQYQ5ttYlotmzmvbDqVsMJW6pTbIV80s3Yku3dc75Jt7iP0YgFjn840lhaszyG+2GD9h/x4vZuVkJnn8t/AcKEiPfUVtzTkxyTatyY9viN3q8sMHxflF3zJU5Owtz/ze/CwG/dbp4Fjs6Kop510u4W5WUTrsyaPW8VHfYw7bIYn+iiSX68+vB5Z/vLa38S/yMCa2HuUhsrr/Dqq5CxJ+PNzue3mm1QgMPjjUlRlGXnAWVRtO9PmhopCqOtcbnoxcN/frxTrVB5cXRy/8C7ToWK7e7DY7ZO11NR5d+H/tHoeP0BHw/+0Xd4NPo468UoLV/3hieXN+NHrkzGp5fro/+YQvgfzkem6MbFeicAAAAASUVORK5CYII=" alt="Imagen de Vivolab">
    <h1>Estudio de la síntesis de voz mediante técnicas de aprendizaje profundo para la creación de voces sanas y patológicas</h1>
</body>
</html>



## Original

 <audio controls>
  <source src="https://drive.google.com/uc?export=download&id=14g2DpUARA_zWYDTacr26yfn_-f8zVhrB" type="audio/wav">
  Tu navegador no soporta la reproducción de audio.
</audio>

## Resultados

***
<table>
  <tr>
    <th>Frase</th>
    <th>Step 1000</th>
    <th>Step 5000</th>
    <th>Step 10000</th>
    <th>Step 25000</th>
    <th>Step 50000</th>
    <th>Final</th>
  </tr>
  <tr>
    <td class="text-cell">
     "Me tomo mucho tiempos desarrollar una voz, ahora que la tengo no me callaré."
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1qpmh4_Z-OT95QhOSk_VjweMlAvWf20lk" type="audio/wav">
        Tu navegador no soporta la reproducción del audio 0 en el step 1000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1BHzXReSXkiLcCeYIuo361ZvlHUvF5Adq" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 0 en el step 5000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1rhWhAt9yThWcgsihMdSfCZ2jLfRrHW3W" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 0 en el step 10000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1bEpMfu-3Us3Rq6KcNrijDBMV9D1IJ5ia" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 0 en el step 25000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1IB3ul9HwJn949xCvUdiKo-X00AeB7XlU" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 0 en el step 50000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1E9QxN6-K3CcU9zcOFEn5EhxisNglPC46" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 0 en el step final.
      </audio>
    </td>
   
  </tr>
 
 <tr>
    <td class="text-cell">
     "Sé una voz no un eco."
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1IIU5LOqPRnvKQLacnGqIgVMV3VEpqfe9" type="audio/wav">
        Tu navegador no soporta la reproducción del audio 1 en el step 1000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1nlt5zcEad8s--9ZupogV5OM-crW-cVjU" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 1 en el step 5000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1WDIBTlBnXtjksMfMI-D5Sb9vMuXjYZNh" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 1 en el step 10000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1nHglyMNlA0igRNCKx5oCaXRO7D0sWzEV" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 1 en el step 25000.
      </audio>
    </td>
    <td class="text-cell">
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1WNwJQk4nqICFV-RRCWc2F6jwpG4M_O4E" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 1 en el step 50000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=175nkAuTpSyVw_O6kF-8rW_3vbEEer78I" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 1 en el step final.
      </audio>
    </td>
   
  </tr>
  <tr>
    <td class="text-cell">
     "Lo siento mundo lamentablemente no puedo hacer eso."
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=10ZLvnLeBQNsb04AQcSp9_bHw8pXIHN7h" type="audio/wav">
        Tu navegador no soporta la reproducción del audio 2 en el step 1000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1rLvg_XxOY58kHiqpdXZSL4NqXEP_q6d4" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 2 en el step 5000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=109TxN0fM1JNEyhJvSg7O7G5lcXXjLYGg" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 2 en el step 10000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1er_Cerkm8lxvgPoyA6vf-gLLpIYCuUmR" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 2 en el step 25000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=120kanoJ4bIh1vx7mO3At0VqsIB8aVzWu" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 2 en el step 50000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1agHDiQzKj0ejTBawWC-56iLYfIOGo3WE" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 2 en el step final.
      </audio>
    </td>
   
  </tr>
  <tr>
    <td class="text-cell">
     "Espero que esta vez se realice de manera correcta la prueba de un solo orador"
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1BILZH0EHW19H049twvCV2QItElrc6Br2" type="audio/wav">
        Tu navegador no soporta la reproducción del audio 3 en el step 1000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1OrQyt144mNxMgFOQ_niTkJJWcU45T1QA" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 3 en el step 5000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1g2f8_xeRWcgh9uE9tlMJ-RW0bP6p1gNJ" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 3 en el step 10000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1E16QylEQpXtklwd95OF6geYvJwbJixIU" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 3 en el step 25000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1Y1TuJpN1q51xtjpKJLa8RS_2lN0dmX4A" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 3 en el step 50000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1XqaKRoM-vXYIqTzdS4fozEU_SLbOSBMq" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 3 en el step final.
      </audio>
    </td>
  </tr>
  <tr>
    <td class="text-cell">
     "Esta prueba está realizada a 21 de Marzo de 2023"
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1evBcDVv-FF_3y80Sn2VHugsLTQHUssB7" type="audio/wav">
        Tu navegador no soporta la reproducción del audio 4 en el step 1000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1p-lC8I4Cd044RV7jzCa9cq7bDfwZhizJ" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 4 en el step 5000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1RnVm-mmuvmdVpAPMC0NftOev8UIw3alT" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 4 en el step 10000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=18sX_OFpaY4JrvFFzUeCSxUynXIANETtK" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 4 en el step 25000.
      </audio>
    </td>
    <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1kSzGL3gg48mg4B5Fdu5OzpZNUn-PLXDX" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 4 en el step 50000.
      </audio>
    </td>
   <td>
      <audio class="audio-button" controls>
        <source src="https://drive.google.com/uc?export=download&id=1fhbi7Tc6vIUMK-5pI_60n3s10cPTbTSP" type="audio/wav">
        Tu navegador no soporta la reproducción de audio 4 en el step final.
      </audio>
    </td>  
  </tr>
</table>


