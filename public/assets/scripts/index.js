$(document).ready(function(){
	//$('.date').datepicker('update', new Date());
	$('.age').datetimepicker();
	$("#datosServicio").css("display","none");
});


function agregarServicio()
{
	var button = $("#boton");
	var campos = $("#datosServicio");
	var input1 = $("#ultimo_servicio");
	var input2 = $("#fecha_ultimo_servicio");
	var input3 = $("#servicio_pendiente");
	var input4 = $("#proximo_servicio");
	var input5 = $("#fecha_proximo_servicio");
	if (button.prop('checked'))
	{
		campos.css("display","block");
	}
	else
	{
		campos.css("display","none");
	}
}