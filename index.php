<?php
$players = [
    ['number' => '#',  'name' => 'Michael Kaiser',   'position' => 'Atacante',      'nickname' => 'Imperador',    'country' => 'Alemanha', 'accent' => 'from-amber-300 to-yellow-600'],
    ['number' => '#',  'name' => 'Yoichi Isagi',      'position' => 'Meia-atacante', 'nickname' => 'Egoísta',      'country' => 'Japão',    'accent' => 'from-sky-300 to-blue-700'],
    ['number' => '#',  'name' => 'Rensuke Kunigami',  'position' => 'Atacante',      'nickname' => 'Herói Caído', 'country' => 'Japão',    'accent' => 'from-orange-300 to-red-700'],
    ['number' => '9',  'name' => 'Noel Noa',          'position' => 'Centroavante',  'nickname' => 'Master',       'country' => 'França',   'accent' => 'from-stone-100 to-stone-500'],
    ['number' => '8',  'name' => 'Alexis Ness',       'position' => 'Meia',          'nickname' => 'Mago',         'country' => 'Alemanha', 'accent' => 'from-violet-300 to-indigo-700'],
    ['number' => '99', 'name' => 'Gin Gagamaru',      'position' => 'Goleiro',       'nickname' => 'Guardião',     'country' => 'Japão',    'accent' => 'from-emerald-300 to-teal-700'],
    ['number' => '15', 'name' => 'Kenyu Yukimiya',    'position' => 'Lateral',       'nickname' => 'Speed Cut',    'country' => 'Japão',    'accent' => 'from-fuchsia-300 to-pink-700'],
    ['number' => '16', 'name' => 'Ranze Kurona',      'position' => 'Lateral',       'nickname' => 'Planeta',      'country' => 'Japão',    'accent' => 'from-cyan-300 to-blue-700'],
    ['number' => '69', 'name' => 'Jin Kiyora',        'position' => 'Meia',          'nickname' => 'Breakdance',   'country' => 'Japão',    'accent' => 'from-rose-300 to-red-700'],
    ['number' => '22', 'name' => 'Jingo Raichi',      'position' => 'Volante',       'nickname' => 'Sexy Football','country' => 'Japão',    'accent' => 'from-lime-300 to-green-700'],
    ['number' => '23', 'name' => 'Yo Hiori',          'position' => 'Meia',          'nickname' => 'Ponta Azul',   'country' => 'Japão',    'accent' => 'from-blue-200 to-indigo-800'],
];
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Elenco oficial Bastard München — Blue Lock">
  <title>Bastard München | Elenco v0.3</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = { theme: { extend: { colors: { bastard: '#9d1c2e', gold: '#f6c453', ink: '#09090b' } } } }
  </script>
</head>
<body class="min-h-screen bg-ink font-sans text-zinc-100 selection:bg-gold selection:text-black">
  <header class="sticky top-0 z-30 border-b border-white/10 bg-black/85 backdrop-blur">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4">
      <a href="#inicio" class="flex items-center gap-3">
        <span class="grid h-10 w-10 place-items-center border border-gold bg-bastard text-lg font-black italic">BM</span>
        <span><span class="block text-xs font-bold uppercase tracking-[.28em] text-gold">Blue Lock</span><span class="text-lg font-black uppercase tracking-tight">Bastard München</span></span>
      </a>
      <nav class="hidden gap-6 text-xs font-bold uppercase tracking-wider text-zinc-400 md:flex">
        <a class="hover:text-gold" href="#elenco">Elenco</a><a class="hover:text-gold" href="#destaque">Destaque</a><a class="hover:text-gold" href="#contato">Contato</a>
      </nav>
      <span class="border border-gold/50 px-3 py-1 text-xs font-bold text-gold">v0.3</span>
    </div>
  </header>

  <main id="inicio">
    <section class="relative overflow-hidden border-b border-white/10 bg-[radial-gradient(circle_at_80%_20%,rgba(157,28,46,.45),transparent_28%),linear-gradient(135deg,#09090b,#18181b)]">
      <div class="mx-auto grid max-w-7xl gap-12 px-5 py-20 md:grid-cols-[1.35fr_.65fr] md:py-28">
        <div>
          <p class="mb-5 text-xs font-bold uppercase tracking-[.35em] text-gold">Neo Egoist League • Alemanha</p>
          <h1 class="max-w-3xl text-5xl font-black uppercase leading-[.88] tracking-tighter sm:text-7xl">Lógica. <span class="text-bastard">Ego.</span><br>Vitória.</h1>
          <p class="mt-7 max-w-xl text-base leading-7 text-zinc-400">A casa de jogadores que transformam ambição em números no placar. Conheça o elenco do Bastard München.</p>
          <a href="#elenco" class="mt-9 inline-flex bg-gold px-6 py-3 text-sm font-black uppercase tracking-wider text-black transition hover:bg-white">Ver elenco <span class="ml-3">↓</span></a>
        </div>
        <div class="grid grid-cols-2 gap-px self-end overflow-hidden border border-white/10 bg-white/10 text-center">
          <div class="bg-zinc-950 p-5"><strong class="block text-3xl font-black text-gold"><?= count($players) ?></strong><span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500">Jogadores</span></div>
          <div class="bg-zinc-950 p-5"><strong class="block text-3xl font-black text-gold">01</strong><span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500">Objetivo</span></div>
          <div class="col-span-2 bg-zinc-950 p-5"><span class="text-xs font-bold uppercase tracking-[.2em] text-zinc-400">"O melhor do mundo não espera espaço. Ele cria."</span></div>
        </div>
      </div>
    </section>

    <section id="elenco" class="mx-auto max-w-7xl px-5 py-20">
      <div class="mb-10 flex flex-wrap items-end justify-between gap-4">
        <div><p class="text-xs font-bold uppercase tracking-[.3em] text-bastard">Squad list</p><h2 class="mt-2 text-4xl font-black uppercase tracking-tight">Elenco oficial</h2></div>
        <p class="max-w-sm text-sm text-zinc-500">Números confirmados exibidos na camisa. Os marcados com <strong class="text-zinc-300">#</strong> aguardam definição.</p>
      </div>
      <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
        <?php foreach ($players as $player): ?>
          <article class="group relative overflow-hidden border border-white/10 bg-zinc-900/70 p-5 transition duration-300 hover:-translate-y-1 hover:border-gold/70">
            <div class="absolute inset-x-0 top-0 h-1 bg-gradient-to-r <?= htmlspecialchars($player['accent']) ?>"></div>
            <div class="flex items-start justify-between gap-4">
              <div class="grid h-16 w-16 shrink-0 place-items-center rounded-full bg-gradient-to-br <?= htmlspecialchars($player['accent']) ?> text-2xl font-black text-black shadow-lg"><?= htmlspecialchars($player['number']) ?></div>
              <span class="border border-white/10 px-2 py-1 text-[10px] font-bold uppercase tracking-widest text-zinc-500"><?= htmlspecialchars($player['country']) ?></span>
            </div>
            <h3 class="mt-7 text-2xl font-black uppercase leading-none tracking-tight"><?= htmlspecialchars($player['name']) ?></h3>
            <p class="mt-2 text-sm font-semibold text-gold"><?= htmlspecialchars($player['position']) ?></p>
            <div class="mt-5 border-t border-white/10 pt-4 text-xs uppercase tracking-widest text-zinc-500"><span class="text-zinc-400">Codinome</span> · <?= htmlspecialchars($player['nickname']) ?></div>
          </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section id="destaque" class="border-y border-white/10 bg-zinc-950">
      <div class="mx-auto grid max-w-7xl gap-10 px-5 py-20 md:grid-cols-2 md:items-center">
        <div><p class="text-xs font-bold uppercase tracking-[.3em] text-gold">Player spotlight</p><h2 class="mt-3 text-4xl font-black uppercase">O Imperador<br><span class="text-bastard">Michael Kaiser</span></h2></div>
        <p class="border-l-2 border-bastard pl-6 text-lg leading-8 text-zinc-400">O atacante que domina a área com o Kaiser Impact. Visão, finalização e um ego impossível de ignorar.</p>
      </div>
    </section>

    <section id="contato" class="mx-auto max-w-7xl px-5 py-20">
      <div class="grid gap-8 border border-white/10 bg-zinc-900 p-7 md:grid-cols-[1fr_1.4fr] md:p-10">
        <div><p class="text-xs font-bold uppercase tracking-[.3em] text-bastard">Contato</p><h2 class="mt-3 text-3xl font-black uppercase">Envie sua visão.</h2><p class="mt-4 text-sm leading-6 text-zinc-500">Sugestões para a próxima evolução do time são bem-vindas.</p></div>
        <form class="grid gap-4" action="#contato" method="post">
          <input class="border border-white/10 bg-black px-4 py-3 text-sm outline-none placeholder:text-zinc-600 focus:border-gold" type="text" name="nome" placeholder="Seu nome" required>
          <input class="border border-white/10 bg-black px-4 py-3 text-sm outline-none placeholder:text-zinc-600 focus:border-gold" type="email" name="email" placeholder="Seu e-mail" required>
          <textarea class="min-h-28 border border-white/10 bg-black px-4 py-3 text-sm outline-none placeholder:text-zinc-600 focus:border-gold" name="mensagem" placeholder="Sua mensagem" required></textarea>
          <button class="w-fit bg-bastard px-6 py-3 text-xs font-black uppercase tracking-wider transition hover:bg-gold hover:text-black" type="submit">Enviar mensagem</button>
        </form>
      </div>
    </section>
  </main>
  <footer class="border-t border-white/10 px-5 py-8 text-center text-xs text-zinc-600">© 2026 Bastard München · Blue Lock Fan Project · Versão 0.3</footer>
</body>
</html>
