<?php
if (session_start() == FALSE)
return ;

if (isset($_SESSION['pseudo']) && !empty($_SESSION['pseudo'])) {
    header('Location: index.php');
    exit();
    include('header.php');
}

?>

<!--Doctype html-->
<html>
	<head>
		<meta charset="utf-8">
		<title>Site vitrine</title>
		<link href="index.css" rel="stylesheet" type="text/css" />
	</head>
</html>

<!---------------------------HEADER---------------------->
<body>
<header>
<div class="main-all-navigation">
    <span class="span1"></span>
    <span class="span2"></span>
    <span class="span3"></span>
    <a class="home" href="index.php">HOME</a>
    <a class="create" href="register.php">NEW HERE</a>
    <a class="login" href="login.php">LOGIN</a>
    <p class="panier"><img src="https://cdn.icon-icons.com/icons2/868/PNG/512/basket_icon-icons.com_67985.png"/></p>
</header>


<!---------------------CATEGORIES-------------------------->
<div class="categ">
<p class="cat">BODYS</p>
<p class="cat">SOUTIEN-GORGE</p>
<p class="cat">SWIM</p>
<p class="cat">CULOTTES</p>
</div>

<!----------------------MISE EN PAGE----------------------->
<div class="container">
<div class="v1"><img src="https://www.etam.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ELIN-master/default/dw7a11c77f/650436105_x.jpg?sw=500&sh=591" class="produit" alt="produit1"/>
  <input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">24.95</div>
</div>

<div class="v1"><img src="https://int.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dwfa34eee2/650402505_x.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">24.95</div>
</div>

<div class="v1"><img src="https://www.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dw2488dd7c/650400973_x.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">24.95</div>
</div>

<div class="v1"><img src="https://int.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dw5f760379/649917629_x.jpg?sw=900&sh=1024&sm=fit" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">24.95</div>
</div>
<!----------------CULOTTE------------>
<div class="v1"><img src="https://media.brandalley.com/img_rayons/1600x1600/2018/10/31/460/2979460_1.jpg" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://media.brandalley.com/img_rayons/1600x1600/2017/10/12/068/2639068_1.jpg" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://www.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dwddd2b425/648733705_a.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://www.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dw410370db/648733705_x.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>
<!----------------SOUTIF------------>

<div class="v1"><img src="https://www.undiz.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ZLIN-master/default/dw68bb4f5b/649224805_x.jpg?sw=550&sh=550&sm=fit" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://media.brandalley.com/img_rayons/1600x1600/2018/10/31/615/2979615_1.jpg" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://media.brandalley.com/img_rayons/1600x1600/2018/10/31/523/2979523_1.jpg" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://www.etam.com/dw/image/v2/AAWW_PRD/on/demandware.static/-/Sites-ELIN-master/default/dw8cff00b0/650374405_x.jpg?sw=1692&sh=2000" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<!----------------SWIMM------------>

<div class="v1"><img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcR3hAjfHUcmoglC63O2watEQGBw20AeQ1cSYCEt2LmQM53AXHudWo8ZQSSR3IcnmXiBrW8aIYaF6jkR_tyq-YEmGQX-iEq0Yp-cSdOy5jza-FubtWocIaWX&usqp=CAE" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="data:image/webp;base64,UklGRtI2AABXRUJQVlA4IMY2AADwxwCdASolAYYBPkUgjkUioiESmp0oKAREpu0OszOPiXJH7FsyLx+uPiv6X8l/y4+bjkHvs9leFfyl+769R6gy6+nz+D/gPyV+cH/M9Zv6f/4HuG/qJ/mfuM+Nz10/u36lP6d/bf/R/kPd7/4/7l+9D+/f6T2A/7Z/pv/n2Of7g+xF+2P//9d79w/hw/q//J/bj2l//5monpG8oP0Xh75wveO1H+f5j+0LUd+aff79//ifap/f+IvzQ/0/UX/KP6T/qvzS4uu43oHe532f/cf471p/xPPL7If7/3Af1b/7Hlg+Ll+L/2n/Z9wL+ff2j/wf3X2Of/L/Rf7f1N/Tf/v/0HwG/zz+2f9v/He3B7Gv20//Xuu/s3//wKHKPn9lmkMxIufbcXyzeOj9E2l4qhQbbVlTNC5hRaH0jF6e87XT2KB4GBVPMwQ/+nckBVqexTYqmGKZ4rckIonvRL4xdOYqJUlhekWqCAwLjXPFmPtdHjKqccXsxU6yB3oY5YHi3vhiAd6p3iR8MBFPEFlxryuHCshzNbFX4fqGa8IXGU5B1z3TUiRnpvwU3faEf6391FFROqWMWtZZMT9eltCOqQH+pR2IfzdoTLl8KB90qq5bEN4ZBV3GhZ4xG/IGLiHN9TSQ2KaalPY+2KXnKJblL2Zd3Qe3Y3ZR/BTSGikqokuDI0igUS4b5f/jZtQhiJw9tmfRGFy+77KomovHcSlT21aXOqpp/i+qjXSNH+H0Lq57PW7/lJbc3V8WC+AyTtj/haM/krNeXVdbvR2Q4bnfYwM2novMIHtjIgl75W+Uavxwro47nYfiuUl0GffLHFSx6zNRE2N/wIhAhl3eqEv2xdNqF4S/170AZBU802ZziEVsmAs5AnWnU1tia9Cbs4F/LDc6Wrbd1DYBQ/80fTYObQmuYkySIhew7T9QEUp7z8J3yS1ejt3lZGFxUHHDOw04wYIxeRkgURWO8U2K29yQbko6e73wW9oKlyPUE1sjm1qDY6VEGbtdqP+43o7bNBwvDsxEKtZPQQkeuF1buKNubnBnfmUgfllVk98jhWkQnF0SDNhc654sBtQpkhB1CK+4uaJZhfWz4fk7iurdkrrHmfJX40bom+n04GezIbrVmlxF6NEUhJP8pjxd39lLJc2eNn6a/4L8zInSNYfp9Pe+htIbjYBiMMMY7hfbbpnnZsbmL/Wq8v/WwqdRvzxxl/OJPANo0RZ/gbQ3EzF5cu6itjpUuy+Ycuz+a/emy7EansVcY8xhSQbisc2cp/BokxUQlLomuD5dyNa10FpuvVddKE7ipTxnyo2KJGklZU1z7OUnTLSl1017XcFJJreW+QdQv+YA/kJPtbmoB6TAYujTH/f5jNsqFbE+lbvkj4bUkaiAvbI+XG8gOZne1ZOtC1u60+vDC/SFSzeD0vibh62UKL9UBWl7/qVIm0lSRVcOva0IO/W8rhPd94EJRgn9prZqX0jWxVG24BjRoc//6xT5y0z2rP/PvdkIg/0uFupcDM8nyCELPVb6trgeFwqLVy4jmjcwsihcpzatoPXsO2hJ+ekJcSnYeNKTSs+JphQXMeyZ1cWhELPimodFyioMtWnZgFwKRJZxp90b7oleUOMsowskdKI3sHnwSAp53Ujsi5NkqqyGigNUS3Tw2cKCm7mWY8mvYbLj93p1xKBcqyJ2+vFaqISTDFhEBM5a/nUDnnXhoXvlINkzhTP5O2sB1ZhUi7m2jLfVQqBqXEmbvku4tPw1Zq48XFLiDOYawjtypNObp5BIUmHpoMvzNbxGuhbnwKwUu9PpoqAIonWsbE7D/xAoOfDH+7Qqz0f8SjDxwR1EVeAas1Iog/qpJXajtoTELClMk0YV4xIEvOBIPDoB8RFn6nm+FXp8fY4dBM9YOVDzyCpjlPJVOfqNU52BtVcKOwWTZrnEi9umBpIe6gd+ugw2pS85bF41eGg6xs2Ayk/19ZsBacr0+nqwCsAAnnmXEsFva7TvE/SXJmFYEd0i/Dojm3dWFpWEFG46BaNXeMcVvIDHq6jc9pjxUr5dT+qOO1rkxIfSfxIbHPne/p5rwivmdqTwDifAJL1WYRpibH8CObCrlPS1rX3iJp0+RRbP+JDY6VMLJ6e/TcFT8zYD5eiViSAGr0ivNAAA/b31ickDDykjzB8YF4apeKc9/2hVgZ32qiIum5QikuW5I5JKEClFi+YS2O7r5TRPPLmeZuvqHBKqU2660c35Ow0LcwOljfjH8WhtOSh2GCkNmtXKpWZVe5EL//HuF1TR0vK+xrQuMw1qNCzZAbCFvAMWothYhOv5nM9g5tEWdODNXhP9pNtS7zGhZKsilDDfLJ+755AduB48cO24W9w7YQs7YFqo0Xj07DpiwTGxSJsP5D9Nk1BiNot/+MvhGhXomDeI22r2HaSZoqCcJKpSqSkhGAHE1z06ypMhHAakFj1Y00/b0JkRsUUVdtveaj96gtqL8SceVP13Ydt9oLjfayFTTBn7ddabJkLZCq4ZP5hIphLM2DAWpIIvs/5NzssLD2pkQJ2waJ3HnY5e3P88XJ9ysklA3YzdggTEDt6+C3eJunugaTsAVOmbQV0aerSZERXcSD0qY9Vgy81Niwp25RHJBLCAqe2DiqXMXylt6Q0Km0A3mOg0jLTxdifWJGNSqNoo5bDjqw0IQKefVeg+HQPU6Ehtvbb/0AWm3duaB+TiwMz7gc1fcYHtQ4LvNBXCRjT8uOwICxnjQj+6Mdawh8P+ZQ9Q6iT+yrks2fK26amQ5AOa7AD/yUkhlrmabxzEPh+xyS/XELQ208tG5cWFbqabSVqvd+AVxBnPEHBzrDdiPFsq4fuYLPC/LuDlbMDSX5CvJJACRjfZAwEbO7GtOeyHFkaD541vhDUZoEB4YQngndCw1iUw1KiYaqNUa6VL7hoajwcwHTyGr3I2gXOqpEcdZPpYdT7829s5EZq+CTUJy4fIKC7i8uShxP7YU1hEswY+fumMrHIeDZjmhUyBn6b4Yjn8/ryNCmf4ZphKpsoaubTrYh2bLtWnggWGKuft1wm6KOTwMdZRHTA7I5fXGH2fFP3LBw2s2MFY6SwAsxoVTbCIAd5ks5474MSrAZQsGLHi2mysz+74uP0kEdatv0CNvGhsdJHRdPvLhjSXd67zNyxZBDBUIEVhUasLONB/jW89ui0HZvIH7Gf6p+ltE1uHdtEOznDhLXEZG5sPEbx9mhNLxQ29geoRmxJxAjLLPDuP+CstDkJawE+gKFQf7FCBLQ8zaLsNdTzOFoIcQlA5k6PY01MGo+Ievk2OoVC+dprLfiqiNeg66Z63R630HbG0GkXQzz01xoShv4wHjMvtzYcQfW75M6cS+sS/c2EemY0tETMZ6BTkdNr5V+xHZPQaXADrRcYMJ1NIeXoaEYkiOBsSH49hG7uxECh+b9XcndbrZnqPukRlhoycNccBbXA5hlafHB7jXVrVZZFkvDkEcHseAHw5jiJXzK0Zo9UAGWPgNbpp1vDQAiQYu4FBWGujbb/3Cqy6n5oAmJAr4RUodBO7Fu+7vGjfxkSqQE9Cb7FacOgFNOlSPLsuOotXsF1jNnfuIR7w6j7IFHRWFEHKJmPnhSdnW+xQZdNEPgUmBknbJWEnsWwsYUMB4C8D1GkZIF9BFAH28heSvrb372hbul1m2ogIhBP2Oq8qYPrnKbkuTHu84f5Z6/NWsWgwYHeBR25HUpvrnPvjer9Qj50GqaJcNIuFJWECoycXSmVSlY2712CBjCmebC/wmUu8Vgm194ayP9koVmam3xDJyIEX5pNY1E/NYpXjPjvJv8f+7Xra6JVJ774p7FyXdflch6YEA/n8dihevskA48nziYSXXXfQ72nGhUT9nwJx1+/rPGZ1pVE2rD1pu+uwqSIW2NL9MQY4TD2TzPR7j/rRTPe/FBA7k9Pig7mC9tTqqPqjCXYuU3JPjL4vhbESPBusEm/WxOILG3T6J+i05INxj5i2oSCQ3dcP1DxPxDq/9xqjko0a9XFz3ZMS+DfYxS+yaSAR2b7UiS9KCT7FuSvwfD8fWcxF2zLvKwSEasC6Or6cL4Br+icuidV2F1PgFJ3Fda3uaI6cDBjJLDQikZ/xOCukw8eNS4n7kmU1qINs1zS3LNGyJABNJHJDeXPO+A7/372bxyC8vBEVzAKC+yfQYtE02MEVVT52xtOJo/UorBIBi7b/IMOzLaSHQs48MrsGF0csotIYhrYAVGX6dsAI0O/4nzy2RQEtrmxKFc/1Qdu41ZvXFf0Aw+Dlw2wb4sjwEvLd/5xoykFtbPsGSliqzc9tc/Ng+RDVGh+nygm7CaQyE71fhtIFgEfRZlijiLc338y4isXTQRfrCIBeA/QYwRO8x4+scA3heEoqMjIILTbvX2gixg325jOP3ULyyazp6CYco21Z6sFxnIkLRoJre0l91hmdmt8mnafVKXMsvANrmYbQrvJhDJpDJumkm4+fqyNz7NnyiPzK/W4tUeBGoStNatpNB9fQyjVUPETGS4i3lNzKfOyiyHyMXrqCGfLOElorLYD3lrJAG3GgmJSdDHgITKYLG3smmWGVSFINSl/uXTO7rZprz//PRzurXNVFViSExOn0ZPJz60BU2qt6pkXZ4Z+0xXaNuy8Dz0YM1yiG89ZQKewxeiTsp/ExMMtTsAH5ZHGiPqqwNZHr9YcYNBEQY16LRAUXWDQkkY8LhWmGwzpIKZuq0jI+DdbPu3DwLz/rwuu/n6qjxt6IjLy+BC1JPKjSVJ7r9PGLVvn1O2xDh18MM3vY3WeClqQZSYLaaYrsABOXOHwuVnhKPaV9fIfpiUaf72MrhIB3Egxi85iFN0GgTDnwa/XprQN4hkas9lp4udJw33L1KitLZJgoDHhBrcIEv/5EVRdjThcQeyv4vc1KbYxA43WMo4Tbp4F3832u/brhJM5LHHJshQMNIOpj2heq5Z/QZfEEAteqMGJs/DciWN5Sl8HP5eaoDKE7z9tVRyR94f4Z766vTbwWnJgbhXEng4jUK/AOLM+DMtuiV9wweqG6weZRrtV1nlScKYQQzmHJwmiZW/KePp2D2ftT/C+75s/jC3XIWzLdvDpXle8zbpZTyCziUvOxaoiUmRdVqxuxX/Hr1JQnowruXSj/KciUaG/iMwuk9bVE7iGcIWc0LVLJ0xysdfqjOTvt+rgsvqAOFFIxsUr9tdICGlepkwp4UpCfABrUm2KUvAOwLY8oKEiw/znvSvRsdYBejyDNxsA3zZ7ZAPrHj4ZPJITzES1RvwW6FkMSk7pltxsjVrqSMFuL+t2Ztow9uR8AvQBSXJ8LIOe+9/KfPqYkEOui0QyHAOH1sa+7ZJG4oFSrRwj8JnPitM0s6FND7RzUS4K2iAYcFhyj02rUPxs1sDK64dohyrQvOM0ihbejc7T1knlnG7Gl8Rd1ZDzm7BZA1n8sYxGF3fgerDPZ/Y4PAOiXuuY1JVzk8RLqP+rlRzrp0Y/Kg5XYidQoHY6XCVrnSRLv4H8A+bi486e6BMbk+8PLzVZHxUy+KmZEl84u9uCa/UB3IKmVuSq3d1c4DS1jqcJUxuF1iq5nWERcnC3Cb1qEkhBc1e2jcTTEitgKkdlwHtvJW2O9JKnV8X02RV2LF53vqQP3sTo1CLngHLRWZI40aGY6rhjQqBhHjASo0RO5b9Q1U0Rs3Sna/snZrWZKecTYdkXn1SiX8ekhHrAe/MkrtwY4Q57qPyu/q/hS/iJYAbzwNCf+fs6twyUwm+VGL1e/6e5LwCGRObZeGHau6w8eXwaafKWCT/r/aRmK4NrX/fPQzkMX5NvugC6KmYD7+z1kyF/VvZEkdJUG8bntst0OB+pKAfiR6Ib9cy90ppoAPZLOBtohZYUnXq0GvFrYv7Z9veONBNY+aTp3DqAtzV3k9UiF0nVDeJQjHuRXx2QX3VHsXgqqmqq+9ekhFN3e+ssJvXZs1xsQLq/GfoKti0wO4e7BgIX8hy+ZxYfel7vAxmkOA39YbGxRoptNFHlEqlCP+atOTNFKXP9NMu+gLhJFWhkUTViOmmjdB6Eoz8RhvGxE8INSI4iGhLI5Thqzt2GNNhn5L3yAwCBRB65AjVKOg8rXVOS9G3v5Bx1OjIhNo7LDlO40K/avu8SCvr27yaw+hsSR7Kx9FeAJwtXPzwaBmvZ074pMsUMq1lbxF+IheQfrc2lVvQ7HXcVsGgm36/q3fyMyx5V/UFVjxFDR53QdYClJPHPkwPpDaRulNBdqPJx03a46LQ/Nls+G52TQvUYFOzRzTaW/MJtR5Fc2mNfVST8aw4jpd18kWq7ZkBBrvwkALo4oz8r8+BvzSMJbiSZKhM3H/3ohdn9YcwmlsA4N1olBt+N6rJg7QoaIJ8mixul3rWDfti22EFo5ogORsOO2FL/kAEo7aaswwfpoDX9eg0/fp7lSuHIiWXw7GcWEgoYC2xTX/GfSUdWyfsyKDGHMCU27/Yno04yS75yc/h9PmAU/+Ny7c2jwalkF1NQTbQyIWfNWkzSMyPNWtoig8XXsBG3UqGhK7OykjrJdZ+E0lvDd/fib8aJicwBtzeu+c3fuPDgBeeoGCruGvsuh2jc/4hxwRYKCukEgCevMsYzLWmfIYAmtgTUYi3sWXScd26ZcvzklgQi5fjj32aGUhsYOwL+XxBw0+ciKnKjGHe6zdjPnaxLPKzC+HrSHmpGz93mDJcBWvpAztxfiJDCd7aQrACc18JcNLofmehXvDF3+bb+wCzkoBG9vODEPgk/TMHwH4wsXxBGnVGn9hnW7YpigqQEBiEnjYglOQXUKAJSMCA7to4C4sTMSKqbtGtdZ/dbBn5bXtPKHPvYWyB7WMeDaPiakwl38A3As4G/tDHShYHuU+vzqgplXPRCLS25/dya5oLfU1LZLkW2A+8Siu8rIjMkgjuo71vzErRsFzIa34y1U0CzVwtKZekmAw1hm+Y0loJUu1fd/ijU6K27NEleyKAuWXGxLa3PrZv3LYkv6F5GJ6FPBPRnPPOnAjrBj3Vt1u/PGW2Uwo9oI34TJqFUoiBHT5KHrjOdtIqRiRDAN8ydE32gQdcYJtN8Jf5xlG0VRnOByivHpIxcMBTQ884vmjRtF3sJE7iizY3uFHsFFYLexgumRbvK0Ybwb3gG8h4GU82PWMQLufdqr9qjx0ZB0xY6SddCpi0hYbGmVXI0c/CfuwN02qIjJ8mz6up9Hyop7PUA183R9d3x6Z/fok6RRkYjH135BmrhE2UcC+QHJpQ2f9RbZ/XO4oHhLImTZAtVyXxKrjYsHIh1DQqHw+2nGI/vYFhA2h6bjSh3yxkUIDA5mKoS2gx81RtCwo7cE9V3vvGbHAwsy0ykO/16Reb0yxfSM4nNPEXYAaej32qMgmdMzsZq7NAalHbPIpyERvrU5HPHXjVziKzz8VB8WNmD4NJbtSFX29DQe2lkkXM/JOVNP5OZtGZbnE8RsOnHh+BJObMWQ3nwdt4mBqPj8/QUv9sRNkjrJh97mSkbNiK1MYPxSNaY6ismKbukWqEwbyZxh08JRRBrchJRXeL0JVp/XRlUsITXGF5LtN+kgHIR+d+OkwhsZjhQ6GnmUWKyQFpHi8l0R3GmGBSC27wv0Du4DpwmKj/gxdxOzU5fzwjpYXZ8m/eQOoQrAkgvjVNNX0lUnnMoaFGU/WYSTKflKExEldGlSdS5v2+IO72VmuNqIcJ64Rt/rW8u6yplDz7+U1DoKC09rXpSGHzO7Wz4greZ5IuH+VDs08Cl7SU8IShrXDrp1hWtJ00QGBeubo8H72f1uNPpQuDWRey405A5QvoeQg6ma9rnlVNV+LtnPwGsAjYolbKZ0Cxa9QHr2/eLSeRNZ2nmPpGNC4ftTa9Qfz8z9XCSGhjkSZaPJUhXkaS+6/AHbAzmVAgdeDTExqQZ6pGYsL9DY4f8PA0z9a3gSKtsbKWKT7+Du/hSWgOOf8R+piAeWLe5o8LTwdM1w3XCKfocnq04FQ5YGTs+SLa6qeGanmwXF1h6PQm6OAzkRLgtti4pXX7Ww58DVzsMNH1/RZ2sg842T64TScJFlV1WHV4zIY5Ootn83ZT6WigcVAAdOQl2WaTE560EkeGvg2F/5egszp+CyoLT6OP7ek6VGUWDQrUiwtqp5BtbHufW6jnbicDYLuu4HT6y5k1+qBZaaZvcrNt1r4LmpsyEZ+MODwhsBPB3JQu2SYQXoJLrDLYeKIvOyMXk4TGKTabix1CjDaRfaiNg3BtwqDE8wjeyGtXAK+LDuwLZrifcCNlUe3yoQxkncS6z+qDfXBxAUXdiuNUAVfe/Q4I/7GhbtcNiTwdKO52BtvkqTu2KKaIFHwmVZZwPDtjmEEWGY0b9fsC3rMaY2QV2FxtGN7WJ1SQiNOtAnbEe9nbmRytP5O3JoqdXGwiwLGd9IjnRH/ETxucSP0E3PVV4Xt6jFYLUN1+VtRDu2rOqVo6vxP25OiUGOFofImHqkR9juonu5njdktrtxyzG4ATQ9VithB3OBfSIEysDrOsvj9Xd+czWwNzN6vt290LsMT2qCNB6vP9/knhbJ5c4+Uqr7QjW83ifTOOZcEHUtohTBMnOvFFM+ngAFEYL8Ubxe8w4MqInFXmTTeipngUbZTaxTRkAQoOlPAvARDPewxiYu41ASECpZK+s1l8AAKBoc4TkktkCjw/PqJIN0ZZy/bDOlB5l/607KUOTaAnGXcHcNFHOOO6cHFOEaEWBDZ582+Yax8J8PHbU62L28BfH5IhZ+lMjEZQ2DZVzstWATIy0m+KOG9bIUqimDGs0vC3zOriLhgukAzB2B5JV/4IB+r/EfG8J9RI0vpbCSg+XHOgacNah9CJAzUtWJuhqPVqGybXybh3nlOSBQBojkgVoMpqIUvGIsp02Bu6NAocLGCDegqjPovKs7ekHSYk8sYAicQl0aMisgkCQ/hXKafGWd0zucvvN1ygJ17L9RQF8Bn1o1TbZnLKSMJdIlrJ6T6lJZR2spJXZ1rBFIn3JrjVfqNPjuzq3BL4alftQha+5X6KuACaq9XD7acEW9vuWEL+eCdHqSZY/+DwzvRvARCXCS4NcMYH2Gggg4Mz1wy2Ifx4Kdlj19Dv8XF6Styu3zjL8SM2GSlncR9BNvRnIXDY1YLCA04n3BJIX/fVfnOZ7vJnRECspik4lfjLXBSx3nFs8TttZVmFbTz7gppwp4hYZ5KiWE59FLAIcO9Cx9zFB3pChXaJQUgrBm2rmV2GmK5oG7ywBZHT5bxzyTo/aMvJFvX9PaVkFJggv+s43cWcCBjfbXjEU2YnsxDWObJ4VqMYOYVXxLmDLfa2RMLoQC2L9LIcjv+4gADmkcfiS69cx1stgbHUWQrHhYjyMPmZ/9tVE58jYXo12wqQPy16ou13lKW3efbSI612rzZjcv6iwscgHKlbWyS5Q2H/eyOonmE/+5y1ZmvsAgeEK0G0aF32XvLIYADCW2h6nbHxvH81f2y9JHxfBKl4AFxBFueQR6LxaDdqIbFGGQi75VN4qWTRAkZrf8s9ihwBo37Jyah+dLOFl5j4kMxt+Vww/ZdFWQWUyrQpc+x2Cvl7SMy530iq7ono+VhWqc2scb/7yCbMPLXz3+d3z1BqtCxTQAEt6I9+75w5/oiU/pfTkWDE15kBCRkqLu3goiogmQaf+E6EJbIr1UEYSDKp91o392YOrdPAyvLPOaz7J/t3k8nM+n1OfhOAyg1aRhKTgpMWHAysFcNoqzQ2i7+/VRDWovZgDPkoJdwhYq+wI9b50Ujf6SG4bcJDIC+lZDPiXXtsT8r/MXSVzxoMi9+Zg90qGlf0nJSmnzBo5u2qosH8qh5UYT+wc46KusLpPmXI5r6lumfgeybT14ojWnDo8vBBegvxhbUdfQteSOX1E2z5CVtxcSZheDiAo9mmGJx5SU5UYozXGWyM1CrhketjzwxUvM4BznU0sDSYb+jmmFgubZykpV1uxvkkXSfhrvU1FiWCtbUKmMF5xZli1DhKJM8GVa219saBz7QfL7a5yP46VBz58ifG4D1hOevb86ewENcaOflLXM+fMYDQ66MpqScgq/7Jq575DqZmGcuZwg7Jdwml2he4XZfmz/ZcwD+DEqIxqNek0lsf/fa4gCYICkuV4VVwu7xXVzrK5tb+5/+lGzd9M2oPVN5uDOIUOTJP30kh25ovzZdAkN7Z/hCtXHh7Fqytl3skh1Zq57u0HhgYXBxp7XEVnEQs/BQfWRdeVYwuwr4hAI23VPg3DXT+FcGc74dRcogWGh/UwMYnwtiXtpxOtPh787Fr1vLN04qlp7R29IGScmAUqj/ZgLM9hwRDpSne4oqJbcA2BAdQbzfAO5LGsf5YcbFYktefsDoMVKbcgygad2dfGXa74bwJ8t6y2GI1uzNuDtX8lRcVe2/X/T/wymOwDA36HZkE3PeKziI7bd4zEtCPhnUQsrlkBPkpYtfm++z39Z31eldqyyo9mBTAGtBrlDiug4WwjwWt67z0F3ieSsrwzYHVzLGt/QzOet0zym6nAhGtKTfPlFF9ugG1tmkpGSDxpVisOiDmWRWaJ9RMM3yu+PNzRAJPJi8lQ/mL66cCB8pgI0SazfSeOZMprJSPvK9Ym5+NZCfsYspG/05ndEMcaxW5cJW/Cmtyo3weASKjga1UXdIR+HbCs6ECG/dlCqmhsup80DOV+lZdzoNJadRoeV/EOle2oaIThFr9mJNdLnhakDbA1HBP6JLLwO/gkNbkkixQQzqEJ2Y82lnLlJQXPyJgPJvYrStT47aKbhSu9FaQGtMIhNLSwzwrVcvEdZAQUQU9ANcgsRHrBY+PApKb6jEonmkOi499gwD1RTQUYWyxxtVf4nhW8k6on+7HRYL7kz7Nh2NpcT+2M0dXkx04iLUYOC2xDdl0hO60VrTCFUsS4P/nQ9QnwiV/5QlkwqSKvzElLawgG6AQMVWSX+hWuAhSeeRvpsC1VDsV954w29ENuK7y3BWzeosWYMG/m815V6lE655cBJ7jzCBfCJTskgqEGKQ5x36TKnUB/b+CvJSDr00ZO6GHA1+Lz8hedLRpNBqm/Tm3tL4Cj5K6mbmXQAIMPq8adxKrViXWiX/+s92ZNHXwyWnaNxeTnYKqs4ydSVqD24ZBd7VXnmAi+ZqDX28z/KWEJsXrw/EDQDEwqW+ka0khNhRHijuqJf/xh2oAH5EZBdIcPw5sb/8gIukp8TFF2ICAbkwLS15+7jdKe8qEuLw3wYF4A6Q4i80jAOqUKh39Qy+Ggy51eSuJP68y+6AoaaZVC1YbG4vFSeX/t/WVFXbjmUZrrkTixu1tDLozCHKH6sexVLqE0cBko39lygzJXlMQfPA4MEZawrQ32ItXwbtdlm7fXiMzvuIDd3aIyPhSppQbJNyeYgIQM9ZGZHTnW/nhzKszz7dtBhX1YFE4ktZ/vN/hOJfckWxvLk1cHf1NdNOfsRIp9hP0smGPVIVIyZRJqFDlH9PL1LGTKjFXxG9/mPiiyrDd4fiTBm0KgLzTYiETL0WWJcA+t8JNTWBNoKZ2RNVSFaUA/Kp4wwrPqObDV3+dUzxjcN/RPFLeT8j/AwPuXdC/OBU8vKXKGrHoNE5wDdb8VMa/0oSUbQetS+LUkWf0ZGlVGurie9q4hVbf/LDRTN+OPKlw4yXpmMfmhdpZh3DGbL+3z+JdhYDJ2dqdNpBeApskeH8GwJd+PMf+UJpO2QXyTSknK/v7naiPtTG1W0szVD/DzkLXDyHab6vdDiCsouO03v1RHWpAQz4w3Bbh2OTbJmIPxs+S7ZmVjWb4R5FUejL0YHk2zDGAZNQhruzX/IMQ+MhLBLOWb6+ArzwEUbYJb0E5KXa1lMGv1UMaUm+Wj7cHZc4eX0XAj0wSqLBQqwdtmBXygZRdTGV504dpVE2Z5l0SS/K3ZgM28repj9D4bfdWdl9pDYNx1s1Y7dsjS6HUHRP3/dkezHurGXdf29LdwgMrnaL3dOwWFZLT6L3EHiDiOJ7oEzxhKHBAx21jkcSCD/5rEZFkRLgUdPsXNRyXzElt2Ewtuy7GGqSmgj9QiVAe4nawY6Kmq6gVOYd+GgDCMIMZa/qpDFnkhqkZvRrz6pNN+0hv7T5qE4UKx8ym/Xn5Eh7hjhufZQJ82i/GXRVXZu9lV67URVD2Gqq5LetAuGAbaRS4NbBdWm4pZs0t5ikD8N6ZPg8HiUXjQDJJ/BgEXu6RSnKXNUDtRF0mgv+ZD5nnKod8PTH3ySbgc+5Dy8Ik7EiJxuQ3n9J46hy1e8ys+QzPcYUuCoitK1paqrKse1C2s5bn7c4IjVRLtl/pEP5oKvUAz9VgVxxM3ePhxv7v/rWO+3prvRUj9YRca9Sp4l4lyDKwMj0koCu0kqMmC4mLyfDbaVWL1NrEOXrSP76OYCcC65jQ9qDCO2EmWSre49wZXh3t1xjDSGKnq5B3/lqhjXPL795tdXd/wdGrpW16uwPJpGhiZbERs7FYwUwI/kXnSH7TlEPLl/cUGIk2p7tFpxWJb+H5LzgzMpuzMl039FQ0AWCRVVViyMNgMyW2/V9ylou9NKtzFspreCJzEkdYoN+yOT6cCsw/0BFp/27HrkQf9DyLTwUr/VciHbDWmrdsf0Bdu7NADDtJLdAg3NjkGkTmr3+5kyaw1JJ2HlZo5sit2nsfJTw2vWgWd9JHv/h4/TaEhOdW8+OYKJjiabZQspVum9//zDIESBakf38EEpQXn7iW3VA9bPumqQS1pRqNC7V9A6o9zRO3KVkEfa+Zhaud8br3USN/CHALdL1fnJCAbMl423OrQWaqSABmJ9//klI15wtnbBaQfO3AboFy9u5+MjIfir6bpEx3LtV4f2sruaR4Dd5BsRe9dosyH3z1oYT8F/o/4xp3CU8CBXQCklXlyTnnc6kmNOr0jtCrVIqlHjzqk3zsRRU8eUi08DEo302qUQ1VRMMZZ2wgmdb0b4kH0/Vqk4AgBh3ZAJBuDsKOAW1srihDGUUY8+89Q3cGX09RQtjamSKL3zfwcO2BQ07P6ZD7kneq+ylvy1ymwLMn8x9YIS51QGAPL2xP3YXUUaOwH8r8GeDk/C5wJdHXaSppJLXGBoXdWu0Pe/yp2IUXiczrNcDoemrJNWx7qV4UVh4soAmBzBSkIzoiXjmA3NxiK7qXtlGezZPjiY6wfxXidOSQH/h5yFEIPuq0ZtCM9N5bexoayyxmKtsZ5q9bOfYcBfg7T7nNYrWiN22SvN7vyYmn978kqOJwydL3WWuGCowKkRtmFP07ds6qk8HNKXcvlMXDrG6LIoTMltRwBVkkB95nN3lpE53fqvKnw2yy7dFc+3hmcdCTff4voIxaeCgMBbpZ05q0SSt2wZG9/wFFFjGZzNBras1WU6J5xiZ3JfBtaQ+q+tFvEPyjJ+lfkXATgWkkV/UaqziHIN2+p2IXj/2fJmqoki2PdoAKls95KdEu28+br7fCVhEMC92dU25yyaWPULi2/SuZx/SQXZJijBe1eTPRHW0KrymyT/PUEZdZh+RJoH2aIKk4Mxylp2FtuxI0py+X6ABGPJglxOTwyuTjEptQ8D3SZfI+lqUpWswhpmCWv0t8rfvcLUayV68Z1t7MW5zrLecVGcEzaj6YK6KpeabpAjslOQBjfJlFukrbb2O1U61PpG4nxsGE0X6FNl3UUzW2T2Dq0uqI6/zzn7GXgAUB1pipZWd1AVUOR37wwFqt2UGmjY86+CBL07eiUzyMp3Ycm9pW8PRM5qcFyReDjbQaeAN0wcymZ363KHqc1BQbuD6Je+sfRM6f9CKtq0Dm/DNej6uu5jfWjog3leI3ddkhsYOjUg0JHY/NkJvt/FjEsv5oQcReOOB+CbQDOXfU1l1XgTQTfRtMf/9h3HWrYThm4hZbiIWfVJcjul003RLggzMVLhLjUcaZpBJSLPpt2cgW+wpSIeFpVKoXawUaDiICTHPbQUh321uz3pn8l+oEE6ZBBp4/Vp+xEElqtLugV/l2hBNjk4ZwjB6GKH7BoDOpKl0D9QDSjTnt1VVwhBcSy/0hnxA6d8siGkOCEr6RPQSBt64xrq2Zl8VqS7Vg4dAqXzCHh9H3uvmg58eRx1GBqFC+pff2P1DFlVdRbFgnJWN63OG1ZaOFUiUa+P5m78nFPjAjXoQAVtEgZMCiEEFfU64rb2Er13VQi0xhq+JvcOCvQxZRK18HaC0dSuOEU1IzWYwvkhRJMwIve7+7VcPWPLJbjwDYF5CapQuK1WTjOM234wTOq2/FNDLXTqcHG40dFbDKvrlwWmnA61BhwDdqb4yJV66M4tz76UIy9h7zYWyE4GVuhnoNIZ3DcP1V5xkESJfafJpquhzULjxc8IN53CNzTcfUAXRbwZ7bNWEY6fkeMjZSrssmmPEJ0nuSJ+4ylTW9xAcJVF35BaO5s0sHY+st5N9btssfTDEn/kf9n7XsZJ3V/Al3qei+JfSLgC0BKghlpudMI5FQnNaDKGaDdaIpMAKjymC2hHaUnccRoGdZr5owwpLfeHnEWCuPI81tNvOox1rhUCJjBnVkifhtdFJPmjcvzuSXgd+qM3ilqJQwDHWJzdrw07LKnHRIH2Z1lqChiH/VDu/OtivapcQEWPpZNbcK5tM1SUe6rHpTTjF4dykq+gV3i1itFEgCIFCRpXmXKKCjXY2bIvIY4xQAuYpopUhPXa+UOmfl+VZtXtUAC1bHMi6zTWlnaa+0YMAcSPQItOq5t7qvm2hd2Hi7sgX1DRvGWxyT25RXLjGToc4pNk2ioAASXBtIEFiVS85bl5KFbkrj1mJMAqNQu7UA+Oob49wWTVRZqQNeoOtWCD6tSv0iKVxkwpETHa4S9T+WUYucbJ+FeLgFc7coZ/czO+q7p0OWK6xkztCPhyxLcDkju9w0isRCCNUk6YLk3B/JOtrSXmNyn3+yaIRieJMauXq8Zvaco/DCmPReAFaca0t9vRarILnl3bUYpjg2k+FliA2LypnWrjhW+8VVhc9N+3L6g6JnM7ASJOjoUDbdbp0eODkcv1O2TwYHgo+3dl71g14RcQNZaD7oUSPkVyJV0MmpRIcmxiclNKz0s4DQcAoCMP3y/1peP4f4IEzwNh5+RXu0+kf9BIbPP9JaVXFsZitIHC/Fz9kbE4MukKbFqcnmkMbcBhXRkQ1u4PqjeqDwICxmxtXF1uxpXIgwZallMDHL13AzDZOO9tvPAGymR5jqHl7F97jJRWgIsgt/A3vpcNY4OeOgUSnxfFJjP/+/TTfYVMlVly5o+yeGkZFzPhJf/OOJ9qaqKKEtWu6z5425Z2K7ZHqokSRjOoLNH3Sr3OFddZy7g3gmVgkHw2ytgDRvIO7zvim3jtK4utrFyXKm840qrDXRDl7wVSXl8HY2NM+ODMPdeo0rmXpM/1iJFPS2EoufPLwGR6aI79MCXz/hou96z1T+Zn6z///atboqowbuaQ+W3CgBVwcGyC5BhdkW9MK+DYGda8DKoC7SQ0igBx/dItbE8OQCYWgtK1seO+Puyj+1gprd1a9yGxr46Znk4n1+UcKpjwQhyHL8XDwZD2k58DeTsgIrZvopTKDSHgW2sm0hyYMVHjK9Iypxm5YGzylEUp0OwqfHAi4LXC14AA0jw0kEnuj4uCspZ27ilLltziic/aM20ZTSybp5NiqR9ji3r9+va8azvD0IloNUOeYHU3O28J/YZcqbEVUxoU/HcWVazXmV63oh/Aw/5Z+8EfDBoXM95lIkSievQk/ezyTWoK5HBNvsqc1hLKsF4Ik3VJn/DpuiU+JrP42IeXODnJ6TiKEPty4vqKMj38PVc774TcAkVT0dipMyPDPK1yhc0bgF698W8QSKUoGezW/RnORbt70ptd4RZ2oIyHvCeLag3y941yRG9tunpg/8K4E1CllGUHl+Ff+vgyd4Aae+f+a0s36gd6PcFdzqg0Z7B8vQDnfVfpotbgwhKmH9v/AEOabblR2KPmSyIENynPjFFB3cAERmOtunhDTmaD8OA4XEGyg75hMSsquYa9EavbrrFkEgGnkrd+7WAfPjRJx59p6COqgzReAxKKVtVmJ/tZLOVmyKnnPRAeJ3zcjsh+xQAfdeHtRHefL3wWLm2m86K2axdpkEfJYbAlwuMgZOXWJhXfD9TpFJ4DrRwfTa5HRA0sHWdvIs81+RueFk4bGoPmyZIZ34XCz8TQuZc0v727gaN+uAlToj0k5DUahLSwQJi4O5HMoUgjSgC9Hsi/17YuMF5s5bSX4pnkT57eaN+7uPa09mA6/MSnRUGrTyox6IwW2GCA08ppvg3WF2nLpDqbUI1YpCQJ8oFVgy+VFvi1MUsW6J/28VjIY2qBz6NO/VbTHKfL9iYpZ8DS4lpV4ATXs58K1GSwK2lBWQuC7RL0WtKEiY1gaCGbTcmuZ+++OY7FUa37s98Ml6lfJe0JiFBzQ9V5pbzZ2gFwTVn+vzKsK+XcL2qoagg0AeZZFLIuqFUMaTzuoh/0AM/bOAfkcv2IG93S37+VIS3Li3jfUJ2rbvDegFHWROqwQ7Zj+Och4XFBg1eFOh2oVZAfKY2tLz2RG7FjJ/IA9gvQidQtxl9Y70xtM2XqjpMfD88c//iAlyewaDiaav/sARbOmKqk5XSXiqm4AEfHEkp9fiVuOuIHm6/vyOITip12oxJMK5smJcyKxwerzIx18tdJ8eRjprE+CojzEl3BVq88H4FcZDOwRlQw31ug8CGceynwmRdJ5CxzEgOz2HP4BPDfjTosRdfKjxS2ymN3e0ncHSl8A06V+25WFbwekaRaxfHcePkejrIOczqHoY3umrZyZpvLO2qv5q4h6yXwlX9Ukauo/QDMwGFyWwZ39CklT+XEqrI7Q3/LH5xU+41tpUP6GiieF7IHAJ8LT41GUnh6eHk+aASeTZqjEClqw6slchETXTHpK0HavfeMLhyzwe/ZcqzN98aQit2WxXRt4vZInTYmGBC/mPIBVBqbKVKIgvZsy+A28SC8IxiKDmgmdkDCRa4yI1ObigyKC8HyUxSq3xANAWY+QDtZcFY+JNY9UAw9ak0BZjH+y2IRHVXOSK7+RIn40cl86Jq1hvELfhRlyIsPF+UUjqQD9eXGXvMUlhrEly9AgkezL8j4thGso/iQc5802ZCzAwpBU1j6Dx0d+f+CJQdQaEQJEMY1lS2505llmCYTtZheedclXX8SXQv4zYROwqmvI77k6WaTpMkRk1DAE++7JNjGnb+PNuF2JtjPntuIU1CpHbxM7/vhq61wR07/01KlKfNxUmupkCDQ5bNr868gaG/ZZIM/f6eogpY3MWiUVXHN5IZiTTrO2adoLN4fLCppGJUFbX8hCMSXeeytjPYd41frvbIIc8E3eO5aEgVNP0baH7tWsYWLDOuIPHuithlsx9rHyGyrFNvXP7lXKs02l4hhFA+3GrS7CjOIisIGAt2yQMB/KWR2fRHHTWZDKrgbPLqs5eaYgYQqobTzlKJEBA26KnZO9E0lCGaDcBX3t8z8UhzfrwJ8LF5xbBWoyuUJ1EL0Hyh/G5Y1bOF5neuIqHoMQNx3K4uRUoCr/GA7gHCbFOsutEDTmKMySr3epADM4RzRloWeY3mfyLl10FIg/Xnn5bNliKlpZ05++h4HURRThDqPCt1cvNKcEgMdiQ6nPOsc+ov+qqZ9dkIzMzWb98aT6TIcUsoNuACFsSfevT0BdhpR0ViIH5dM4uxMkvUscoP9sQMx0nqu/npRWRcLC1cnVtEHYe5q4tqr6QW2IK9pp9VNx2P4pPWrt9QIFHyMSRdASPeZpdzCZmJBgpl3U9zbfAREDJ3+dLsVbQdugVCLH+QzybAFazozUTTg4DHIXlkQeFwaJ+Zf1eyVT++9PhuJ6LuE1XZWvRrpDdYWYivqqs99hU2NOnWV8ACls3DmMemnP+lTrXv8wFjAAH0/egBFjsi+cX/GukD0/ONxij/toHmoia7D5UngxArFdP53gMrdINn1HQYTtssak5yio0UxKOALKCYHWJ2Ot4DoTqfrPYBlrCSE8IaT8idNLuE+jAgS35Fo3mrv6gRvpWxom1ITiXu4/SDhfWCzf9xlD+QHtdUVa/jRIkgSt/0yYt/m3sCcTVwAunVl/BBC3A6x3pF07D0LeM2/Le4Hjbeq+10TtZw2NMxJSsu9zo0fRjgLO7YU+k6CZTkGfTtSX6ufA0BiT3IkDVpzoYxbd2NN6l27NhevJC4Lx5kUkWXhVQYGToMMW8SCXagNlyFRSzvaaM+wJ+MeY5raF+V2tZMrgswwfGuQsNZsIdEQxRaKEtX5Z7PGle3R0YlUgxS1+ovOihAh4p55+RnjQ+WlWefCDMsJopXUFHkd6Op+fATWpO7OnDJWpBOkowsoFZHQ5098vHmQvV0iXdKNu8jjWDGPzElD5rsLn4QoLmzTR1pR29UfaosJyB+8amBCpgUfQhSrarCKRuIt9HdAP99xEXuAWJd3996YwhYPBhG7MmiMqPnQpKixUmxdqj+e9MDgYkAAAEUvcYeLVWWJEjle08oU35Nql7Ei806g/IEutAe83A40LqYbkIPGMAEzyAmgB5vydgwvZGbMH/nG15zUkO3t8VFLnFodmeaAz5tasAQSo7jkaLAffrWIHO/N3JPnWiI9nrIl2VtuzVhulZLudfNATYb45PL5fcb0zVdtVEfvPZ/uPB/05VtVRFCMeASlzrnzwRjZJmNwI9CcNunIAhJ7GSQAAAA=" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://img.ltwebstatic.com/images2_pi/2018/12/28/15459811792455998625_thumbnail_600x799.jpg" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>

<div class="v1"><img src="https://i2.cdscdn.com/pdt2/9/5/8/1/700x700/mp09700958/rw/taille-haute-bikini-2018-maillots-de-bain-femmes-p.jpg" class="produit" alt="produit1"/>
<input class="nb" id="number" type="number" step="1" min=0 max =1 value="">
  <div class="price">9.95</div>
</div>









</div>


<!--------------------------FOOTER--------------------------->
<div class="footer">
  <p>Designed by callard & aquan ©</p>
</div>




</body>



















































