<form>
    <div>
        <div class="form-floating mb-2">
            <input type="text" class="form-control" id="name" name="name" placeholder="">
            <label for="name">Nome completo</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="addres" name="addres" placeholder="">
            <label for="password">Endereço</label>
        </div>

        <div class="row g-2">
            <div class="col-md">
                <div class="form-floating">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="" value="">
                    <label for="phone">Telefone</label>
                </div>
            </div>
            <div class="col-md">
                <div class="form-floating">
                    <select class="form-select" id="is_whatzapp" name="is_whatzapp" aria-label="Floating label select example">
                        <option selected>Este número é WhatsApp?</option>
                        <option value="true">Sim</option>
                        <option value="false">Não</option>
                    </select>
                    <label for="is_whatzapp">Selecione:</label>
                </div>
            </div>
        </div>

        <h6>Faz parte de algum grupo de oração da RCC?</h6>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Sim.
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                Não.
            </label>
        </div>  

        <div class="form-floating">
            <input type="text" class="form-control" id="group" name="group" placeholder="">
            <label for="group">Nome do grupo</label>
        </div>

        <div class="form-floating">
            <input type="text" class="form-control" id="parish" name="parish" placeholder="">
            <label for="parish">Sua Paróquia</label>
        </div>


        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="email" placeholder="">
            <label for="email">Email</label>
        </div>

        <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="">
            <label for="password">Senha</label>
        </div>
    </div>
</form>