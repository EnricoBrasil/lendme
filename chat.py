
import nltk
from nltk.tokenize import word_tokenize
import json
import random
nltk.download('punkt')

def load_data(path:str) -> dict:
    with open(path, 'r', encoding="utf-8") as file:
        data:dict = json.load(file)
    return data

def save_new_data(path:str, data:dict):
    with open(path, "w", encoding="utf-8") as file:
        json.dump(data, file, indent=2)



def answer_questions(question:str, data:dict):  
    data = load_data('data.json')  
    result = "Desculpe, não sei responder a esta pergunta. Poderia me ensinar? (Digite a resposta ou 'não')"

    for intent in data["intents"]:
        for quest in  intent["pattern"]:
            if verify_words(question.lower(), quest):
                rand_answer = random.randint(0, len(intent["answer"])-1)
                result = intent["answer"][rand_answer]
                return result
    
    return result    

def verify_words(question:str, tokens):
    tokens = word_tokenize(tokens)

    for token in tokens:
        if token not in question:
            return False
    return True

def add_to_data(question, answer, data):
    data["intents"].append({"pattern":[question], "answer":[answer]})
    save_new_data('data.json', data)