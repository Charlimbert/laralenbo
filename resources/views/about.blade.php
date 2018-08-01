@extends('layouts.app')


@section('content')


<div class="main">
  <div class="section">
    <div class="container">

      <div class="row">

        <div class="col-md-10 mr-auto">

          <h1 class="h h2">À propos de Lenbo</h1>

          <div id="acordeon">

            <div class="panel-group" id="accordion" aria-multiselectable="true" aria-expanded="true">


         

              <div class="card-header card-collapse" role="tab" id="headingTwo">
                <h5 class="mb-0 panel-title">
                  <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">
                    Pourquoi nous croyons dur comme fer au prêt de proximité, entre amis, parents, voisins, connaissances ?
                    <i class="nc-icon nc-minimal-down"></i>
                  </a>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse show" role="tabpanel" aria-labelledby="headingTwo aria-expanded="true">
                <div class="card-body">
                  <p>D’abord parce que cette pratique remonte à la nuit des temps. Lenbo est la contraction des termes « prêter » et « emprunter » en anglais (lend et borrow) précisément parce que le prêt de proximité est à l’origine même de toute notion de finance. Lenbo est un retour aux sources.</p>
                  <p>Ensuite, parce que, bien que totalement invisible, le prêt de proximité est une pratique assez courante. 3 français sur 4 ont déjà prêté de l’argent à un proche, dont plus de la moitié fréquemment, et 1 sur 2 a déjà emprunté dans son entourage. Cette fréquence s’explique par la simplicité apparente de ce genre de prêt en comparaison des prêts bancaires, l’absence le plus souvent de taux d’intérêt, la rapidité d’obtention (pas de dossier de crédit à faire, un seul décisionnaire) et la flexibilité de remboursement.</p>
                  <p>Enfin, parce qu’au regard des contraintes et des limites du crédit bancaire, le prêt entre amis, parents ou autres connaissances est la seule véritable alternative au crédit conso traditionnel.</p>
                </div>
              </div>

              <div class="card-header card-collapse" role="tab" id="headingThree">
                <h5 class="mb-0 panel-title">
                    <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                      Pourquoi nous pensons que ces prêts ont besoin d’être accompagnés et encouragés ?
                      <i class="nc-icon nc-minimal-down"></i>
                    </a>
                </h5>
              </div>
              <div id="collapseThree" class="collapse show" role="tabpanel" aria-labelledby="headingThree aria-expanded="true">
                <div class="card-body">
                    <p>Tous les prêts de proximité ne se déroulent pas toujours bien. En cause ? Un manque d’attention portée à la définition des conditions de remboursement, à la formalisation du prêt, aux restrictions réglementaires et aux formalités administratives. Et le fait est que malgré un cadre relativement ténu, les particuliers sont abandonnés à leur propre sort pour conclure ces transactions. Les solutions d’accompagnement disponibles sont d’un autre temps, coûteuses, incertaines ou incomplètes.</p>

                    <p>Précisons d’abord très brièvement le cadre :</p>
                    <ul>
                      <li><b>Cadre juridique :</b> Pour un prêt d’un montant supérieur à 1 500 €, le moyen de preuve se fait obligatoirement par écrit sous la forme d’un contrat de prêt ou d’une reconnaissance de dette qui devra mentionner une série d’informations obligatoires.</li>
                      <li><b>Cadre fiscal :</b> Dès 760 €, le prêt doit faire l’objet d’une déclaration au fisc à l’aide d’un formulaire dédié. Cette démarche est totalement gratuite et n’engendre aucune taxe (heureusement !) mais oublier de la faire peut en revanche coûter cher. Si le prêt est assorti d’un taux d’intérêt, ceux doivent également être déclarés par le prêteur et par l’emprunteur.</li>
                      <li><b>Cadre réglementaire :</b> L’exercice illégal de la profession de banquier est passible de 3 ans d’emprisonnement et 375 000 € d’amende.</li>
                    </ul>

                    <p>A ceci s’ajoutent deux risques auxquels s’exposent les individus :</p>
                    <ul>
                      <li><b>Risque relationnel :</b> Un prêt, s’il n’est pas bien cadré dès sa conclusion, peut conduire dans de très nombreux cas à détériorer la relation et la confiance entre le prêteur et l’emprunteur, ou bien les successeurs lorsque l’une des parties décède. Cela se produit même entre amis et en famille…</li>
                      <li><b>Risque financier :</b> L’emprunteur doit veiller à ne pas se mettre en situation de surendettement, tandis que le prêteur s’expose à un risque de perte ou d’indisponibilité de la somme prêtée.</li>
                    </ul>

                    <p>Pour autant, est-il naturel et confortable de recourir à un notaire ou un avocat pour ces prêts de proximité ? Pas vraiment et certainement pas pour tous les montants de prêt. Alors il est possible de se tourner vers internet pour trouver des modèles de contrat de prêt ou de reconnaissance de dette. Mais tous les sites vous proposent des modèles différents et comment savoir si le contrat est toujours valable après que vous l’ayez personnalisé ? De plus, ces différents services ne prennent en compte que la partie contractuelle de votre prêt. Il vous restera, après conclusion, à piloter tous les paiements et à rassembler les preuves en cas de problèmes.</p>
                </div>
              </div>

              <div class="card-header card-collapse" role="tab" id="headingFour">
                <h5 class="mb-0 panel-title">
                    <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                      Quel est le rôle de Lenbo ?
                      <i class="nc-icon nc-minimal-down"></i>
                    </a>
                </h5>
              </div>
              <div id="collapseFour" class="collapse show" role="tabpanel" aria-labelledby="headingFour aria-expanded="true">
                <div class="card-body">
                  <p>Sécuriser et démocratiser les prêts de proximité pour faire de cette pratique un véritable complément solidaire et responsable au crédit bancaire. Notre rôle n’est pas de créer un monde sans banque, mais d’améliorer la vie de ceux qui peinent à accéder au crédit, et de protéger ceux qui les soutiennent.</p>
                  <p>Pour cela, Lenbo agit comme tiers de confiance de vos prêts entre proches, en garantissant transparence, confidentialité, simplicité et en éliminant les désagréments habituels entre emprunteur et prêteur. Lenbo vous préserve tout à la fois des risques juridiques, fiscaux, réglementaires et relationnels de ce type de prêts.</p>
                  <p>Mais notre rôle va également au-delà, en offrant conseil et assistance lorsque des difficultés de remboursements se font sentir.</p>
                </div>
              </div>

      

              <div class="card-header card-collapse" role="tab" id="headingSix">
                <h5 class="mb-0 panel-title">
                    <a class="" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                      Qui sommes-nous ?
                      <i class="nc-icon nc-minimal-down"></i>
                    </a>
                </h5>
              </div>
              <div id="collapseSix" class="collapse show" role="tabpanel" aria-labelledby="headingSix aria-expanded="true">
                <div class="card-body">
                  <p>Ex-Banquiers, avocats, développeurs, amoureux de la tech, entrepreneurs et engagés. Nous militons pour le développement du prêt de proximité, l’humanisation du crédit et une finance plus juste, plus responsable et plus inclusive.</p>
                </div>
              </div>

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

@endsection
      
