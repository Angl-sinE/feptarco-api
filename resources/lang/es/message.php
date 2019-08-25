<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Mensajes de respuesta de Feptarco API en Español
    |--------------------------------------------------------------------------
    |
    | En el siguiente archivo deben ir todos los mensajes de respuesta
    | en español para utilizar las traduciones.
    */

    /** Exceptions */
    'exception.handler.generalError' => 'Error general: #details',

    /** General Messages */
    'api.update.success' => 'Actualizacion exitosa',

    /** DB Errors */
    'api.profile.error.user' => 'Error de BD: No se encontró el usuario',


    /** Auth , Profile , Access, User */
    'api.success.login' => 'Ingreso Exitoso',
    'api.success.logout' => 'Usuario deslogueado',
    'api.profile.password.update.success' => 'Cambio de Contraseña exitoso',
    'api.profile.password.repeat.error' => 'La nueva contraseña no puede ser igual a la anterior',
    'api.profile.update.success' => 'Actualizacion de perfil exitosa',
    'api.error.logout' => 'Problema con la autenticacion',
    'api.login.invalid.creds' => 'Usuario o contraseña invalidos',
    'api.profile.error.not.found' => 'No se encontró el perfil',
    'api.profile.error.update.user' => 'No se puede actualizar perfil',
    'api.auth.error'=> 'Usuario no autenticado',
    'api.access.error' => ' El usuario no tiene acceso a la ruta',
    'api.profile.avatar.file.error' => 'Error en la carga no se puede identificar el archivo',
    'api.profile.avatar.store.success' => 'Avatar cargado exitosamente',
    'api.profile.avatar.path.not.found' => 'No se encuentra el avatar o no ha sido cargado',
    'api.user.delete.success' => 'Usuario eliminado exitosamente',
    'api.user.update.success' => 'Usuario actualizado exitosamente',
    'api.user.delete.find.error' => 'El usuario indicado no se encontró',
    'api.user.activate.success' => 'El usuario fue activado exitosamente',

     /** Password */
     'api.password.reset.password.success' => 'Reinicio de Contraseña exitosa',
     'api.password.reset.password.error' => 'Error en reinicio de Contraseña',
     'api.password.reset.email.success' => 'E-mail de reinicio de contraseña enviado',
     'api.password.reset.email.error' => 'Error ejecutando reinicio de contraseña',
     'api.password.reset.token.success' => 'Token de reinicio encontrado',
     'api.password.reset.token.error' => 'Error: No se encontró tokken de reinicio ',
     'api.password.reset.error.exists' => 'Error: Usuario no existe',
     'api.password.reset.error' => 'Error: No se puede enviar e-mail de reinicio de contraseña',
     'api.password.reset.sent' => 'Enviado correo de restauracion de password',
     'api.password.reset.invalid.token' => 'token invalido',
     'api.password.reset.invalid.password.token' => 'token de reinicio de password invalido',



     /** Register */
    'api.success.register.user' => 'Usuario Creado exitosamente',
    'api.error.database.create.user' => 'Error de BD: No se puede crear usuario',
    'api.error.data.create.archer.club' => 'No se encuentra el Club',
    'api.error.database.create.archer' => 'Error de BD: No se puede perfil atleta',
    'api.error.database.create.admin' => 'Error de BD: No se puede crear perfil feptarco',
    'api.error.database.create.trainer' => 'Error de BD: No se puede crear perfil entrenador',
    'api.error.database.create.judge' => 'Error de BD: No se puede crear perfil juez',

    /** Athletes */
    'api.athletes.error' => 'No se encontraron atletas',
    /** Roles */
    'api.roles.error' => 'No se encontraron roles',

    /** Inventory */
    'api.gear.register.success' => 'Equipo registrado exitosamente',
    'api.gear.update.success' => 'Equipo modificado exitosamente',
    'api.gear.delete.success' => 'Equipo eliminado exitosamente',
    'api.gear.assign.success' => 'Equipo asignado exitosamente',
    'api.gear.assign.error' => 'Error asignado equipo',
    'api.gear.assign..error.repeat' => 'El usuario ya esta asignado a este equipo',
    'api.gear.update.not.found' => 'El equipo no se encuentra registrado',
    'api.gear.update.invalid.user' => 'Usuario no autorizado para modificar el equipo',
    'api.gear.delete.invalid.user' => 'Usuario no autorizado para eliminar el equipo',
    'api.gear.update.federation.owned' => 'El equipo asignado por la federacion no puede ser modificado',
    'api.gear.register.error' => 'Error registrando equipo',
    'api.gear.update.status.inactive' => 'El equipo no se encuentra disponible, contactar al Administrador',
    'api.inventory.not.found' => 'No hay datos de los equipos',
    'api.inventory.profile.not.found' => 'No se encuentró perfil valido para eliminar',

    /** Competition */
    'api.competition.type.register.exists' => 'El tipo de competencia ya exsite',
    'api.competition.type.register.not.found' => 'No se encontró el tipo de competencia',
    'api.competition.type.register.success' => 'Tipo de competencia creado exitosamente',
    'api.competition.register.exists' => 'Ya existe esa competencia',
    'api.competition.register.not.exists' => 'No existe competencia con el nombre indicado',
    'api.competition.register.error' => 'Error registrando competencia',
    'api.competition.register.success' => 'Competencia registrada exitosamente',
    'api.competition.enrollment.register.success' => 'Inscripción registrada exitosamente',
    'api.competition.enrollment.register.exists' => 'Ya existe una inscripción para esta competencia',
    'api.competition.enrollment.not.found' => 'No se encontró la inscripción',
    'api.competition.enrollments.not.found' => 'No se encontraron inscripciones',
    'api.competition.enrollment.confirm.success' => 'La inscripción fue confirmada',
    'api.competition.enrollment.confirm.error' => 'La inscripción ya se encuentra confirmada',
    'api.competition.update.status.invalid' => 'La competencia no puede ser actualizada revisar estatus',
    'api.competition.update.success' => 'La competencia fue editata exitosamente',
    'api.competition.type.update.success' => 'Tipo de competencia fue editata exitosamente',
    'api.competition.activate.success' => 'La competencia fue activada exitosamente',
    'api.competition.delete.success' => 'La competencia fue eliminada exitosamente',
    'api.competition.type.delete.success' => 'Tipo de competencia fue eliminada exitosamente',
    'api.competition.delete.error' => 'competencias activas o finalizadas no pueden eliminarse',
    'api.competition.type.delete.error' => 'tipos de competencias asociadas a una competencia activas o finalizadas no pueden eliminarse',
    'api.competitions.error' => 'No hay datos de Competencias',



];
