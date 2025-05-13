"use strict";

import * as THREE from "/flux/projects/portfolio-maxime-germis/public/lib/three/three.module.js";
import { FBXLoader } from "/flux/projects/portfolio-maxime-germis/public/lib/three/examples/jsm/loaders/FBXLoader.js";

// Initialisation (si pas encore fait)
const scene = new THREE.Scene();
const camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
camera.position.set(0, 1.6, 3); // Ajuste selon ton modèle

const renderer = new THREE.WebGLRenderer({ antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

// Lumière basique (important pour voir le modèle)
const light = new THREE.DirectionalLight(0xffffff, 1);
light.position.set(1, 2, 3);
scene.add(light);

// === CHARGEMENT DU FICHIER FBX ===
const loader = new FBXLoader();
loader.load(
  "/flux/projects/portfolio-maxime-germis/public/mon-modele/animation-portfolio.fbx",
  function (object) {
    object.scale.set(0.01, 0.01, 0.01);
    scene.add(object);
  },
  (xhr) => {
    console.log(`FBX ${Math.round((xhr.loaded / xhr.total) * 100)}% chargé`);
  },
  (error) => {
    console.error("Erreur de chargement du FBX :", error);
  },
);

// === RENDU CONTINU ===
function animate() {
  requestAnimationFrame(animate);
  renderer.render(scene, camera);
}
animate();
