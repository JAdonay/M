<?php
    session_start();
    require('../vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createMutable(dirname(__DIR__, 1));
    $dotenv->load();
    $host=$_ENV['DB_URL'];
    if (!isset($_SESSION['id'])) {
        header("Location:". $host . "#/login");
    }
    include_once('layouts/app.php');
    include_once("layouts/navbar.php");
    Session("Discusión de Suicidio");
    SessionNavbar($_SESSION['nivel']);
?>
<div id="discusion__entry">
    <div class="suicide__discussion"></div>
    <div id="forum__guide">
        <a href="../../foro/">Foros</a> > <a href="">Discusión de Suicidio</a> 
    </div>
    <div class="forum__container">
        <div class="forum__edit">
            <form action="" name="form__thread" method="post" onsubmit="return false">
                <div class="input-group">
                    <select class="input-group-addon">
                        <option></option>
                    </select>
                    <input type="text" id="titleThreatInput" placeholder="Escriba el título del hilo">
                    <button type="submit" id="btn__discussion__Submit">Publicar</button><br>
                </div>
				<div id="richEditor">
					<div class="toolbar">
						<ul class="tool-list">
							<li class="tool"><button type="button" data-command='justifyLeft'class="tool--btn"><i class=' fas fa-align-left'></i></button></li>
							<li class="tool"><button type="button" data-command='justifyCenter' class="tool--btn"><i class=' fas fa-align-center'></i></button></li>
							<li class="tool">
								<button 
									type="button" 
									data-command="bold" 
									class="tool--btn">
									<i class=' fas fa-bold'></i>
								</button>
							</li>
							<li class="tool">
								<button 
									type="button" 
									data-command="italic"
									class="tool--btn">
									<i class=' fas fa-italic'></i>
								</button>
							</li>
							<li class="tool">
								<button 
									type="button" 
									data-command="underline"
									class="tool--btn">
									<i class=' fas fa-underline'></i>
								</button>
							</li>
							<li class="tool">
								<button 
									type="button" 
									data-command="insertOrderedList"
									class="tool--btn">
									<i class=' fas fa-list-ol'></i>
								</button>
							</li>
							<li class="tool">
								<button 
									type="button" 
									data-command="insertUnorderedList"
									class="tool--btn">
									<i class=' fas fa-list-ul'></i>
								</button>
							</li>
							<li class="tool">
								<button 
									type="button" 
									data-command="createlink" 
									class="tool--btn">
									<i class=' fas fa-link'></i>
								</button>
							</li>
						</ul>
					</div>
					<div id="output" contenteditable="true"></div>
				</div>
            </form>
        </div>
    </div>
</div>
