<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
<script src="https://unpkg.com/tippy.js@4"></script>
<script>
	//Init tooltips
	tippy('.link',{
	  placement: 'bottom'
	})
	//Toggle mode
	const toggle = document.querySelector('.js-change-theme');
	const body = document.querySelector('body');
	const profile = document.getElementById('profile');
	const institution = document.getElementById('institution');
	toggle.addEventListener('click', () => {
	  if (body.classList.contains('text-slate-900')) {
		toggle.innerHTML = "☀️";
		body.classList.remove('text-slate-900');
		body.classList.add('text-slate-100');
		body.classList.remove('bg-orange-50');
		body.classList.add('bg-slate-900');
		profile.classList.remove('bg-slate-50');
		profile.classList.add('bg-slate-800');
		institution.classList.remove('text-slate-600');
		institution.classList.add('text-slate-400');
	} else
	{
		toggle.innerHTML = "🌙";
		body.classList.remove('text-slate-100');
		body.classList.add('text-slate-900');
		body.classList.remove('bg-slate-900');
		body.classList.add('bg-orange-50');
		profile.classList.remove('bg-slate-800');
		profile.classList.add('bg-slate-50');
		institution.classList.remove('text-slate-400');
		institution.classList.add('text-slate-600');
	  }
	});
</script>
