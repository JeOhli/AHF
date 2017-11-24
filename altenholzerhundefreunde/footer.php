			<!--Fußbereich -->
			<!-- Platzhalter (2 Spalten) || Logo (1 Spalte) || Anschrift (3 Spalten) || Platzhalter (3 Spalten) || Links (jeweils 1 Spalte) -->
			<!-- Logo rechts ausgerichtet; Anschrift (Textwidget) links ausgerichtet; Links (Einfacher Link) mittig ausgerichtet -->
			<div class="zeile" id="fussbereich">
				<div class="spalten-02" id="platzhalter">
				</div>
				<div class="spalten-01" id="logo">
					<?php if ( is_active_sidebar( 'logo' ) ) : ?>
					<?php dynamic_sidebar( 'logo' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-03" id="anschrift">
					<?php if ( is_active_sidebar( 'anschrift' ) ) : ?>
					<?php dynamic_sidebar( 'anschrift' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-02" id="platzhalter">
				</div>
				<div class="spalten-01" id="link">
					<?php if ( is_active_sidebar( 'kontakt' ) ) : ?>
					<?php dynamic_sidebar( 'kontakt' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-01" id="link">
					<?php if ( is_active_sidebar( 'impressum' ) ) : ?>
					<?php dynamic_sidebar( 'impressum' ); ?>
					<?php endif; ?>
				</div>
				<div class="spalten-01" id="link">
					<?php if ( is_active_sidebar( 'datenschutz' ) ) : ?>
					<?php dynamic_sidebar( 'datenschutz' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<!-- copyright (12 Spalten) -->			
			<div class="zeile">
				<div class="spalten-04" id="platzhalter">
				</div>
				<div class="spalten-8" id="copyright">
					&copy; Altenholzer Hundefreunde e.V.
				</div>
			</div>
		</div>
	</body>
</html>