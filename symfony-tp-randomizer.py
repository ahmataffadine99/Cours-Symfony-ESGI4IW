import random
import sys

# Définir les labels associés aux chiffres
labels = {
    1: "Blog",
    2: "Forum",
    3: "Réseau social",
    4: "Recettes",
    5: "Ecommerce",
    6: "Bibliothèque",
    7: "Agence de voyage",
    8: "Exercices",
    9: "Tutoriels",
    10: "Evenements",
    11: "Musique",
    12: "Coaching",
    13: "Restaurants",
    14: "Gestion de projets"
}

def generate_student_assignments(student_list):
    for student in student_list:
        random_number = random.randint(1, len(labels))
        label = labels[random_number]
        print(f"{student.strip()}: {random_number} -> {label}")

if __name__ == "__main__":
    # Vérifie que des arguments sont fournis
    if len(sys.argv) != 2:
        print("Usage: python script.py \"Nom1, Nom2, Nom3\"")
        sys.exit(1)

    # Récupérer et traiter la liste des étudiants
    students = sys.argv[1].split(',')
    generate_student_assignments(students)