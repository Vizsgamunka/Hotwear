import TervezoController from "./controller/TervezokController.js";
import TermekekController from "../script/controller/TermekekController.js";
import TermekController from "../script/controller/TermekController.js";
import KategoriaController from "../script/controller/KategoriaController.js";
import FelhasznaloController from "../script/controller/FelhasznaloController.js";
import KosarController from "./controller/KosarController.js";

$(function(){
    new KategoriaController();
    new TervezoController();
    new KosarController();


});