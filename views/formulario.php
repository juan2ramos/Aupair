<section id="<?php echo ($url) ?>">
    <form action="" method="post">
        <div id="column-1" class="column">

            <div class="contend-input">
                <label for="nombre">Nombre :</label>
                <input type="text" name="nombre" id="nombre"/>
            </div>
            <div class="contend-input">
                <label for="fecha-nacimiento">Fecha de Nacimiento (D/M/A) :</label>
                <input type="date" name="fecha-nacimiento" id="fecha-nacimiento"/>
            </div>
            <div class="contend-input">
                <label for="ciudad">Ciudad de Residencia :</label>
                <input type="text" name="ciudad" id="ciudad"/>
            </div>
            <div class="contend-input">
                <label for="email">Email :</label>
                <input type="email" name="email" id="email"/>
            </div>
            <div class="contend-input">
                <label for="celular">Celular :</label>
                <input type="number" name="celular" id="celular"/>
            </div>
            <div class="contend-input">
                <label for="phone">Teléfono Fijo :</label>
                <input type="date" name="phone" id="phone"/>
            </div>
            <div class="contend-input">
                <label for="estado-civil">Estado Civil :</label>
                <select name="estado-civil" id="estado-civil">
                    <option value="">Selecione una opción</option>
                    <option value="soltera">Soltera</option>
                    <option value="casada">Casada</option>
                    <option value="unión libre">Unión Libre</option>
                    <option value="unión libre">Unión Libre</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="estado-civil">¿Tienes licencia de conducir? :</label>
                <select name="estado-civil" id="estado-civil">
                    <option value="">Selecione una opción</option>
                    <option value="1">Si</option>
                    <option value="0">NO</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="fecha-expedicion">Fecha de Expedición (D/M/A) :</label>
                <input type="date" name="fecha-expedicion" id="fecha-expedicion"/>
            </div>
            <div class="contend-input">
                <label for="conduces-regularidad">¿Conduces con regularidad? :</label>
                <select name="conduces-regularidad" id="conduces-regularidad">
                    <option value="">Selecione una opción</option>
                    <option value="1">Si</option>
                    <option value="0">NO</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="conduces-frecuencia">¿Con que frecuencia? :</label>
                <select name="conduces-frecuencia" id="conduces-frecuencia">
                    <option value="">Selecione una opción</option>
                    <option value="Alta">Alta</option>
                    <option value="Media">Media</option>
                    <option value="Baja">Baja</option>
                </select>
            </div>
        </div>
        <div id="column-2" class="column">
            <div class="contend-input">
                <label for="pais-interes">País de interés :</label>
                <select name="pais-interes" id="pais-interes">
                    <option value="">Selecione una opción</option>
                    <option value="Alemania">Alemania</option>
                    <option value="Francia">Francia</option>
                    <option value="EEUU">EEUU</option>
                    <option value="China">China</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="fecha-viaje">Fecha deseada de Viaje (D/M/A):</label>
                <input type="date" name="fecha-viaje" id="fecha-viaje"/>
            </div>
            <div class="contend-input">
                <label for="tenido-visa">¿Has tenido visa para algún país?</label>
                <select name="tenido-visa" id="tenido-visa">
                    <option value="">Selecione una opción</option>
                    <option value="1">Si</option>
                    <option value="0">NO</option>
                </select>
            </div>

            <div class="contend-input">
                <label for="negado-visa">¿Te han negado alguna vez una visa?</label>
                <select name="negado-visa" id="negado-visa">
                    <option value="">Selecione una opción</option>
                    <option value="1">Si</option>
                    <option value="0">NO</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="apoyo-padres">¿Cuentas con el apoyo de tus padres o algún familiar para realizar este
                    intercambio?</label>
                <select name="apoyo-padres" id="apoyo-padres">
                    <option value="">Selecione una opción</option>
                    <option value="1">Si</option>
                    <option value="0">NO</option>
                    <option value="2">Otro</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="opinion-padres">¿Qué opinan ellos del mismo? </label>
                <textarea name="opinion-padres" id="opinion-padres" cols="30" rows="10"></textarea>
            </div>
            <div class="contend-input">
                <label for="opinion-padres">¿Tienes conocimientos de alguno de estos idiomas? </label>
                <textarea name="opinion-padres" id="opinion-padres" cols="30" rows="10"></textarea>
            </div>

            <div class="contend-input">
                <label for="apoyo-padres">Como te enteraste de Au-Pair y de la empresa?</label>
                <select name="apoyo-padres" id="apoyo-padres">
                    <option value="">Selecione una opción</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Google">Google</option>
                    <option value="Volante">Volante</option>
                    <option value="referida">referida</option>
                    <option value="otros">otros</option>
                </select>
            </div>
            <div class="contend-input">
                <label for="comentarios">Comentarios : </label>
                <textarea name="comentarios" id="comentarios" cols="30" rows="10"></textarea>
            </div>
            <div class="contend-input right">
                <input type="submit" value="ENVIAR"/>
            </div>

        </div>
    </form>
</section>