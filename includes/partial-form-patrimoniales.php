<input type="hidden" name="origin" value="Seguros Patrimoniales">

<div class="transition spinner">
  <div class="spinner-border text-warning" role="status">
    <span class="visually-hidden">Enviando...</span>
  </div>
</div>

<div class="mb-3">
  <label for="name" class="form-label">Nombre</label>
  <input
    oninput="this.className = 'form-control'"
    type="text" 
    class="form-control" 
    name="name" 
    value="<?= $name ?>" 
    aria-describedby="nameHelp">
</div>

<div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input 
    oninput="this.className = 'form-control'"
    type="email" 
    class="form-control" 
    name="email" 
    value="<?= $email ?>" 
    aria-describedby="emailHelp">
</div>

<div class="mb-3">
  <label for="phone" class="form-label">Teléfono</label>
  <input 
    oninput="this.className = 'form-control'"
    type="text" 
    class="form-control" 
    name="phone" 
    id="phone" 
    value="<?= $phone ?>" 
    aria-describedby="phoneHelp">
</div>         

<button 
  class="btn btn-primary btn_send" 
  type="button">Enviar
</button>