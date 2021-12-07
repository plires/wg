var options = {
  useEasing: true, 
  useGrouping: true, 
  separator: '.', 
  decimal: ',', 
};

var pat_clientes = new CountUp('pat_clientes', 0, 1753, 0, 3, options);
if (!pat_clientes.error) {
  pat_clientes.start();
}

var pat_options = new CountUp('pat_options', 0, 9, 0, 4, options);
if (!pat_options.error) {
  pat_options.start();
}

var vid_polizas = new CountUp('vid_polizas', 0, +1187, 0, 3, options);
if (!vid_polizas.error) {
  vid_polizas.start();
}

var vid_options = new CountUp('vid_options', 0, 473, 0, 4, options);
if (!vid_options.error) {
  vid_options.start();
}

var vid_invest = new CountUp('vid_invest', 0, 713, 0, 4, options);
if (!vid_invest.error) {
  vid_invest.start();
}

var agr_asegurados = new CountUp('agr_asegurados', 0, 125000, 0, 3, options);
if (!agr_asegurados.error) {
  agr_asegurados.start();
}

var agr_clientes = new CountUp('agr_clientes', 0, 155, 0, 4, options);
if (!agr_clientes.error) {
  agr_clientes.start();
}

var agr_polizas = new CountUp('agr_polizas', 0, 295, 0, 4, options);
if (!agr_polizas.error) {
  agr_polizas.start();
}