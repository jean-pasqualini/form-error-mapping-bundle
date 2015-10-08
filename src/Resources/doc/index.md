#### Form Error Mapping Bundle

Concept :

FormErrorProvider

Il fourni la configuration de mapping d'erreur dans le formulaire pourune erreur en particulier ex :

ERROR_A
    Champ_1 : message
    Champ_2 : message

ERROR_B
    Champ_3 : message

FormErrorAgreator

Il fourni les erreurs à appliquer au formulaire partir d'une source arbitraire

- ERROR_A
- ERROR_B


FormErrorBinder

Il bind les erreur sur le formulaire

FormFieldAccessor

Il permet d'acceder au différent champ du formulaire grace à des chemin de type parent.[enfant].[...]

Astuce : pour demander le formulaire racine utilise le mot clef "root"


On a donc

Application
-> FormErrorBinder
-> bind(Form, FormErrorAggregator)
-> (Utilise en interne FormErrorProvider pour récuperer les erreurs à appliquer et FormFieldAccessor pour récuperer les champs sur les appliquer)
-> Applique les erreur sur les champs avant addError(FormError)

